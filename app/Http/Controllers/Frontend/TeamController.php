<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\TeamHeaderImage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Validation\Rules;

class TeamController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return View
     */
    public function show(): View
    {
        return view('frontend.teams.show', ['team' => Team::whereId(team()->id)->first()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return View
     */
    public function edit(): View
    {
        return view('frontend.teams.edit', ['team' => Team::whereId(team()->id)->first()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function update(Request $request): RedirectResponse
    {
        $team = Team::whereId(team()->id)->first();

        $request->validate([ //todo
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

        return redirect()->route('frontend.teams.show');
    }


     /**
     * Change Team Logo
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function changeLogo(Request $request): RedirectResponse
    {
        $team = Team::whereId(team()->id)->first();

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

        return redirect()->route('frontend.teams.show');
    }

    /**
     * Show Edit Password Page
     *
     * @return View
     */
    public function editPassword(): View
    {
        return view('frontend.teams.edit-password', ['team' => Team::whereId(team()->id)->first()]);
    }

    /**
     * Save New Password
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function savePassword(Request $request): RedirectResponse
    {
        $request->validate([
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $team = Team::whereId(team()->id)->first();
        $team->password = Hash::make($request->password);
        $team->save();

        Auth::guard('team')->login($team);

        session()->flash('success_message', 'تم تغيير كلمة السر بنجاح');

        return redirect()->route('frontend.teams.show');
    }


     /**
     * Change Team Logo
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function uploadHeaderImage(Request $request): RedirectResponse
    {
        $request->validate([
            'image' => ['required', 'image'],
        ]);

        $imagePath = $request->file('image')->store('header-images', 'teams');

        $exists = Storage::disk('teams')->exists($imagePath);

        if (!$exists) {
            return back()->with('error_message', 'فشل رفع الصورة الرجاء المحاولة مرة اخرى');
        }

        TeamHeaderImage::create(['name' => $imagePath]);

        session()->flash('success_message', 'تم اضافة الصورة بنجاح');

        return redirect()->route('frontend.teams.show');
    }

    /**
     * Change Team Logo
     *
     * @param  TeamHeaderImage $image
     * @return RedirectResponse
     */
    public function deleteHeaderImage(TeamHeaderImage $image): RedirectResponse
    {
        $image->delete();

        session()->flash('success_message', 'تم حذف الصورة بنجاح');

        return redirect()->route('frontend.teams.show');
    }
}
