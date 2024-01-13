<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Club;
use App\Models\Role;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read-users')->only('index');
        $this->middleware('permission:create-users')->only(['create', 'store']);
        $this->middleware('permission:update-users')->only(['edit', 'update']);
        $this->middleware('permission:delete-users')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $users = User::paginate(10);

        return view('dashboard.users.index', compact('users'));
    }

    /**
     * Show Create Form
     *
     * @return View
     */
    public function create(): View
    {
        $roles = Role::all();
        return view('dashboard.users.create', ['roles' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // TODO valitdation rules convert to array
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|confirmed|min:8',
            'role' => ['required', Rule::exists('roles', 'name')],
        ], [
            'name.required' => 'الرجاء ادخال الاسم',
            'name.max' => 'الاسم طويل جدا',
            'email.required' => 'الرجاء ادخال البريد الالكتروني',
            'email.email' => 'الرجاء ادخال بشكل صحيح',
            'email.unique' => 'هذا الايميل مستخدم من قبل',
            'role.required' => 'الرجاء اختيار الوظيفة',
            'role.exists' => 'الوظيفة غير موجودة',
            'password.required' => 'الرجاء كتابة كلمة السر',
            'password.min' => 'كلمة السر قصيرة جدا يجب ان لا تقل عن 8 حرف',
            'password.confirmed' => 'الرجاء تاكيد كلمة السر',
        ]);

        $club = Club::whereSlug('qurayat')->first();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'club_id' => $club->id,
        ]);

        $user->attachRole($request->role);

        session()->flash('success_message', 'تم اضافة المستخدم بنجاح');

        return redirect()->route('dashboard.users.index');
    }

    /**
     * Show edit form
     *
     * @param string $userId
     * @return View
     */
    public function edit(string $userId): View
    {
        $user = User::find(Crypt::decrypt($userId));
        $roles = Role::all();

        return view('dashboard.users.edit', ['user' => $user, 'roles' => $roles]);
    }

    /**
     * Update exsiting resource
     *
     * @param string $userId
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(string $userId, Request $request): RedirectResponse
    {
        $user = User::find(Crypt::decrypt($userId));

        if ($request->password) {
            $this->validationWithPassword($request, $user->id);
            $user->password = bcrypt($request->password);
        } else {
            $this->validationWithoutPassword($request, $user->id);
        }

        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();
        $role_ids = $user->roles()->pluck('id')->toArray();
        $user->detachRoles($role_ids);
        $user->attachRole($request->role);
        session()->flash('success_message', 'تم تحديث البيانات بنجاح');

        return redirect()->route('dashboard.users.edit', Crypt::encrypt($user->id));
    }

    /**
     * Save Device Token
     *
     * @return response()
     */
    public function saveToken(Request $request)
    {
        auth()->user()->update(['device_token' => $request->token]);
        return response()->json(['token saved successfully.']);
    }

    /**
     * Show edit profile page
     *
     * @return View
     */
    public function editPage(): View
    {
        $user = auth()->guard('web')->user();

        return view('dashboard.users.profile', ['user' => $user]);
    }

    /**
     * Update profile data
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function updateProfile(Request $request): RedirectResponse
    {
        $user = User::find(auth()->user()->id);

        if ($request->password) {
            $this->validationWithPassword($request, $user->id);

            $user->password = bcrypt($request->password);
        } else {
            $this->validationWithoutPassword($request, $user->id);
        }

        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        session()->flash('success_message', 'تم تحديث البيانات بنجاح');

        return redirect()->route('dashboard.users.profile');
    }

    /**
     * Update profile data
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function changeAvatar(Request $request): RedirectResponse
    {
        $request->validate([
            'logo' => ['required', 'image'],
        ]);

        $user = User::find(auth()->user()->id);

        $imagePath = $request->file('logo')->store('avatar', 'clubs');

        $exists = Storage::disk('clubs')->exists($imagePath);

        if (!$exists) {
            return back()->with('error_message', 'فشل رفع الصورة الرجاء المحاولة مرة اخرى');
        }

        $user->logo = $imagePath;
        $user->save();

        session()->flash('success_message', 'تم تغيير الشعار بنجاح');
        return redirect()->route('dashboard.users.profile');
    }

    /**
     * Delete Existing Resorce
     *
     * @param User $user
     * @return RedirectResponse
     */
    public function destroy(User $user): RedirectResponse
    {
        if ($user->hasRole('superadministrator')) {
            session()->flash('error_message', 'عذرا لا يمكن حذف هذا الحساب');
            return to_route('dashboard.users.index');
        }
        $user->delete();

        session()->flash('success_message', 'تم حذف المستخدم بنجاح');

        return redirect()->route('dashboard.users.index');
    }


    /**
     * Validate with password
     *
     * @param Request $request
     * @param integer $userId
     * @return void
     */
    private function validationWithPassword(Request $request, int $userId): void
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$userId.'|max:255',
            'password' => 'required|string|confirmed|min:8',
        ], [
            'name.required' => 'الرجاء ادخال الاسم',
            'name.max' => 'الاسم طويل جدا',
            'email.email' => 'الرجاء ادخال بشكل صحيح',
            'email.unique' => 'هذا الايميل مستخدم من قبل',
            'password.required' => 'الرجاء كتابة كلمة السر',
            'password.min' => 'كلمة السر قصيرة جدا يجب ان لا تقل عن 8 حرف',
            'password.confirmed' => 'الرجاء تاكيد كلمة السر',
        ]);
    }

    /**
     * Validate without password
     *
     * @param Request $request
     * @param integer $userId
     * @return void
     */
    private function validationWithoutPassword(Request $request, int $userId): void
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$userId.'|max:255',
        ], [
            'name.required' => 'الرجاء ادخال الاسم',
            'name.max' => 'الاسم طويل جدا',
            'email.email' => 'الرجاء ادخال بشكل صحيح',
            'email.unique' => 'هذا الايميل مستخدم من قبل',
        ]);
    }
}
