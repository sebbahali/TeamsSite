<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\TeamRequest;
use App\Models\Assistant;
use App\Models\Team;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Validation\Rules;

class TeamController extends Controller
{
    /**
     * Constructer
     */
    public function __construct()
    {
        $this->middleware('permission:create-teams')->only(['create', 'store']);
        $this->middleware('permission:read-teams')->only(['index', 'show']);
        $this->middleware('permission:update-teams')->only(['edit', 'update', 'changeLogo']);
        $this->middleware('permission:delete-teams')->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $teams = Team::when(request('search'), function ($query) {
            return $query->where('name', 'like', '%' . request('search') . '%');
        })->paginate(12);

        return view('dashboard.teams.index', ['teams' => $teams]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('dashboard.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Dashboard\TeamRequest  $request
     * @return RedirectResponse
     */
    public function store(TeamRequest $request): RedirectResponse
    {
        $imagePath = $request->file('logo')->store('logo', 'teams');

        $exists = Storage::disk('teams')->exists($imagePath);

        if (!$exists) {
            return back()->with('error_message', 'فشل رفع الصورة الرجاء المحاولة مرة اخرى');
        }

        Team::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'username' => $request->username,
            'logo' => $imagePath,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'message_code' => $request->message_code,
            'user_fullname' => $request->user_fullname,
            'description' => $request->description,
            'club_id' => auth()->guard('web')->user()->club_id,
        ]);

        session()->flash('success_message', 'تم تسجيل الفريق بنجاح');

        return redirect()->route('dashboard.teams.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return View
     */
    public function show(Team $team): View
    {
        $team->load('assistants');

        return view('dashboard.teams.show', ['team' => $team]);
    }

    public function showAssistant(Team $team, Assistant $assistant)
    {
        if ($team->id != $assistant->team_id) {
            session()->flash('success_message', 'هناك خطاء لا يمكن فتح الصفحة');
            return to_route('dashboard.index');
        }

        return view('dashboard.teams.assistant', ['team' => $team, 'assistant' => $assistant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return View
     */
    public function edit(Team $team): View
    {
        return view('dashboard.teams.edit', ['team' => $team]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return RedirectResponse
     */
    public function update(Request $request, Team $team): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'min:2', 'max:255', "unique:teams,id,$team->id"],
            'username' => ['required', 'string', 'min:2', 'max:20', "unique:teams,id,$team->id"],
            'email' => ['required', 'email', "unique:teams,id,$team->id"],
            'phone' => ['required', 'string', 'min:4', 'max:20'],
            'message_code' => ['required', 'string', 'min:1', 'max:10'],
            'user_fullname' => ['required', 'string', 'min:2', 'max:255'],
            'description' => ['required', 'string', 'min:2'],
        ]);

        $team->name = $request->name;
        $team->username = $request->username;
        $team->email = $request->email;
        $team->phone = $request->phone;
        $team->message_code = $request->message_code;
        $team->user_fullname = $request->user_fullname;
        $team->description = $request->description;

        $team->save();

        session()->flash('success_message', 'تم تعديل بيانات الفريق بنجاح');

        return redirect()->route('dashboard.teams.show', $team->slug);
    }

     /**
     * Change Team Logo
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return RedirectResponse
     */
    public function changeLogo(Request $request, Team $team): RedirectResponse
    {
        $request->validate([
            'logo' => ['required', 'image'],
        ]);

        // delete old img if exist
        if ($team->logo) {
            Storage::delete($team->logo); // todo
        }

        $imagePath = $request->file('logo')->store('logo', 'teams');

        $exists = Storage::disk('teams')->exists($imagePath);

        if (!$exists) {
            return back()->with('error_message', 'فشل رفع الصورة الرجاء المحاولة مرة اخرى');
        }

        $team->logo = $imagePath;
        $team->save();

        session()->flash('success_message', 'تم تغيير الشعار بنجاح');

        return redirect()->route('dashboard.teams.show', $team->slug);
    }

    /**
     * Show Edit Password Page
     *
     * @param Team $team
     * @return View
     */
    public function editPassword(Team $team): View
    {
        return view('dashboard.teams.edit-password', ['team' => $team]);
    }

    /**
     * Save New Password
     *
     * @param Request $request
     * @param Team $team
     * @return RedirectResponse
     */
    public function savePassword(Request $request, Team $team): RedirectResponse
    {
        $request->validate([
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $team->password = Hash::make($request->password);
        $team->save();

        session()->flash('success_message', 'تم تغيير كلمة السر بنجاح');

        return redirect()->route('dashboard.teams.show', $team->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return RedirectResponse
     */
    public function destroy(Team $team): RedirectResponse
    {
        // todo
        $team->delete();

        session()->flash('success_message', 'تم حذف الفريق بنجاح');

        return redirect()->route('dashboard.teams.index');
    }
}
