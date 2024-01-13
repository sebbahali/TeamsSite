<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\MettingStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\MettingRequest;
use App\Models\ClubMessageNotefication;
use App\Models\Metting;
use App\Models\MettingReply;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Spatie\Browsershot\Browsershot;

class MettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('dashboard.mettings.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        $users = User::all();
        return view('dashboard.mettings.create', ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  MettingRequest  $request
     * @return RedirectResponse
     */
    public function store(MettingRequest $request): RedirectResponse
    {
        $metting = Metting::create([
            'number' => $request->number,
            'day' => $request->day,
            'date' => $request->date,
            'time' => $request->time,
            'location' => $request->location,
            'attendees' => $request->attendees,
            'body' => $request->body,
            'status' => MettingStatus::Draft,
        ]);

        session()->flash('success_message', 'تم اضافة المحضر بنجاح');

        return to_route('dashboard.mettings.show', $metting->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  Metting $metting
     * @return View
     */
    public function show(Metting $metting): View
    {
        $attendees = User::whereIn('id', $metting->attendees)->get();
        $replys = MettingReply::where('metting_id', $metting->id)->with('user')->orderBy('created_at')->get();

        return view('dashboard.mettings.show', [
            'metting' => $metting,
            'attendees' => $attendees,
            'replys' => $replys,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Metting  $metting
     * @return View
     */
    public function edit(Metting $metting): View
    {
        $users = User::all();
        return view('dashboard.mettings.edit', ['metting' => $metting, 'users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Metting  $metting
     * @return RedirectResponse
     */
    public function update(Request $request, Metting $metting): RedirectResponse
    {
        $request->validate([
            'number' => ['required', 'unique:mettings,id,' . $metting->id],
            'day' => ['required'],
            'date' => ['required'],
            'time' => ['required'],
            'location' => ['required'],
            'attendees' => ['required'],
            'body' => ['required'],
        ]);

        $metting->update([
            'number' => $request->number,
            'day' => $request->day,
            'date' => $request->date,
            'time' => $request->time,
            'location' => $request->location,
            'attendees' => $request->attendees,
            'body' => $request->body,
            'status' => $metting->status,
        ]);

        session()->flash('success_message', 'تم تحديث محضر الاجتماع بنجاح');

        return to_route('dashboard.mettings.show', $metting->id);
    }

    /**
     * Update Metting Status
     *
     * @param Metting $metting
     * @param MettingStatus $status
     * @return RedirectResponse
     */
    public function updateStatus(Metting $metting, MettingStatus $status): RedirectResponse
    {
        $metting->update(['status' => $status->value]);

        if ($status == MettingStatus::SendToMember) {
            foreach ($metting->attendees as $user) {
                if ($user != auth('web')->user()->id) {
                    ClubMessageNotefication::create([
                        'user_id' => $user,
                        'title' => 'هناك محضر اجتماع جديد',
                        'link' => route('dashboard.mettings.show', $metting->id),
                        'body' => 'يوجد محضر اجتماع جديد الرجاء مراجعته',
                    ]);
                }
            }
        } elseif ($status == MettingStatus::Approve) {
            foreach ($metting->attendees as $user) {
                if ($user != auth('web')->user()->id) {
                    ClubMessageNotefication::create([
                        'user_id' => $user,
                        'title' => 'تم اعتماد المحضر',
                        'link' => route('dashboard.mettings.show', $metting->id),
                        'body' => 'لقد تم اعتماد المحضر',
                    ]);
                }
            }
        }

        session()->flash('success_message', 'تم تحديث حالة المحضر بنجاح');

        return to_route('dashboard.mettings.show', $metting);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Metting  $metting
     * @return RedirectResponse
     */
    public function destroy(Metting $metting): RedirectResponse
    {
        $metting->delete();

        session('success_message', 'تم حذف محضر الاجتماع بنجاح');

        return to_route('dashboard.mettings.index');
    }

    public function print(Metting $metting)
    {
        return view('pdf.meeting', [
            'meeting' => $metting,
            'attendees' => User::whereIn('id', $metting->attendees)->get(),
        ]);

        // return response()->stream(function () use ($html) {
        //     echo Browsershot::html($html)
        //         ->emulateMedia('screen')
        //         ->showBackground()
        //         ->margins(10, 10, 10, 10)
        //         ->format('A4')
        //         ->landscape()
        //         ->pdf();
        // }, 200, [
        //     'Content-Type' => 'application/pdf',
        //     'filename' => 'محضر اجتماع.pdf',
        // ]);
    }
}
