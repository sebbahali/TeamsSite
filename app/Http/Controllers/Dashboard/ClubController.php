<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ClubController extends Controller
{
    /**
     * Constructer
     */
    public function __construct()
    {
        $this->middleware('permission:read-clubs')->only('show');
        $this->middleware('permission:update-clubs')->only('edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  Club  $club
     * @return View
     */
    public function show(Club $club): View
    {
        return view('dashboard.clubs.show', ['club' => $club]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Club  $club
     * @return View
     */
    public function edit(Club $club): View
    {
        return view('dashboard.clubs.edit', ['club' => $club]);
    }

         /**
     * Change club Logo
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function changeLogo(Request $request): RedirectResponse
    {
        $club = Club::first();

        $request->validate([
            'logo' => ['required', 'image'],
        ]);

        $imagePath = $request->file('logo')->store('logo', 'clubs');

        $exists = Storage::disk('clubs')->exists($imagePath);

        if (!$exists) {
            return back()->with('error_message', 'فشل رفع الصورة الرجاء المحاولة مرة اخرى');
        }

        $club->logo = $imagePath;
        $club->save();

        session()->flash('success_message', 'تم تغيير الشعار بنجاح');

        return redirect()->route('dashboard.clubs.show', $club->slug);
    }
}
