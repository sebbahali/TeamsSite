<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ClubMange;
use App\Models\ClubMangeMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ClubMangeMemberController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @param ClubMange $clubMange
     * @return View
     */
    public function create(ClubMange $clubMange): View
    {
        return view('dashboard.club-mange-members.create', ['clubMange' => $clubMange]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ClubMange  $clubMange
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ClubMange $clubMange)
    {
        $this->validateData($request);

        if ($clubMange->status == 0) {
            session()->flash('error_message', 'لا يمكن اضافة العضو الادارة منتهية');

            return to_route('dashboard.club-mange-members.create', $clubMange->id);
        }

        $avatarPath = $request->file('image')->store('members', 'clubs');

        $exists = Storage::disk('clubs')->exists($avatarPath);

        if (!$exists) {
            return back()->with('error_message', 'فشل رفع الصورة الرجاء المحاولة مرة اخرى');
        }

        ClubMangeMember::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'avatar' => $avatarPath,
            'role' => $request->role,
            'club_mange_id' => $clubMange->id,
        ]);

        session()->flash('success_message', 'تم اضافة العضو بنجاح');

        return to_route('dashboard.club-manges.show', $clubMange->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  ClubMangeMember  $id
     * @return View
     */
    public function edit(ClubMangeMember $member): View
    {
        return view('dashboard.club-mange-members.edit', ['member' => $member]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClubMangeMember $member)
    {
        $this->validateWithOutImageData($request);

        if ($member->clubMange->status == 0) {
            session()->flash('error_message', 'لا  يمكن تعديل بيانات العضو فترة العضوية منتهية');

            return to_route('dashboard.club-mange-members.edit', $member->id);
        }

        if ($request->image) {
            $avatarPath = $request->file('image')->store('members', 'clubs');
            $exists = Storage::disk('clubs')->exists($avatarPath);

            if (!$exists) {
                return back()->with('error_message', 'فشل رفع الصورة الرجاء المحاولة مرة اخرى');
            }
        }

        $member->name = $request->name;
        $member->email = $request->email;
        $member->phone = $request->phone;
        $member->avatar = ($request->image) ? $avatarPath : $member->avatar;
        $member->save();

        session()->flash('success_message', 'تم تعديل بيانات العضو بنجاح');

        return to_route('dashboard.club-manges.show', $member->clubMange->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClubMangeMember $member)
    {
        $member->delete();

        session()->flash('success_message', 'تم حذف بيانات الضو بنجاح');

        return to_route('dashboard.club-manges.show', $member->clubMange->id);
    }

    public function validateData(Request $request): void
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['nullable', 'email'],
            'image' => ['required', 'image'],
            'role' => ['required', 'string'],
            'phone' => ['required', 'string'],
        ]);
    }

    public function validateWithOutImageData(Request $request): void
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['nullable', 'email'],
            'image' => ['nullable', 'image'],
            'role' => ['required', 'string'],
            'phone' => ['required', 'string'],
        ]);
    }
}
