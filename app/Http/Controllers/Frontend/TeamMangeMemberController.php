<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\TeamMange;
use App\Models\TeamMangeMember;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class TeamMangeMemberController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @param TeamMange $teamMange
     * @return View
     */
    public function create(TeamMange $teamMange): View
    {
        return view('frontend.team-mange-members.create', ['teamMange' => $teamMange]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  TeamMange  $teamMange
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request, TeamMange $teamMange): RedirectResponse
    {
        $this->validateData($request);

        if ($teamMange->status == 0) {
            session()->flash('error_message', 'لا يمكن اضافة العضو الادارة منتهية');

            return to_route('frontend.team-mange-members.create', $teamMange->id);
        }

        $avatarPath = $request->file('image')->store('members', 'teams');

        $exists = Storage::disk('teams')->exists($avatarPath);

        if (!$exists) {
            return back()->with('error_message', 'فشل رفع الصورة الرجاء المحاولة مرة اخرى');
        }

        TeamMangeMember::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'avatar' => $avatarPath,
            'role' => $request->role,
            'team_mange_id' => $teamMange->id,
            'team_id' => team()->id,
        ]);

        session()->flash('success_message', 'تم اضافة العضو بنجاح');

        return to_route('frontend.team-manges.show', $teamMange->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  TeamMangeMember  $member
     * @return View
     */
    public function edit(TeamMangeMember $member): View
    {
        return view('frontend.team-mange-members.edit', ['member' => $member]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  TeamMangeMember  $member
     * @return RedirectResponse
     */
    public function update(Request $request, TeamMangeMember $member): RedirectResponse
    {
        $this->validateWithOutImageData($request);

        if ($member->teamMange->status == 0) {
            session()->flash('error_message', 'لا  يمكن تعديل بيانات العضو فترة العضوية منتهية');

            return to_route('frontend.team-mange-members.edit', $member->id);
        }

        if ($request->image) {
            $avatarPath = $request->file('image')->store('members', 'teams');
            $exists = Storage::disk('teams')->exists($avatarPath);

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

        return to_route('frontend.team-manges.show', $member->teamMange->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  TeamMangeMember  $member
     * @return RedirectResponse
     */
    public function destroy(TeamMangeMember $member): RedirectResponse
    {
        $member->delete();

        session()->flash('success_message', 'تم حذف بيانات الضو بنجاح');

        return to_route('frontend.team-manges.show', $member->teamMange->id);
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
