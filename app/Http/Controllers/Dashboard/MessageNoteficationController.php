<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ClubMessageNotefication;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MessageNoteficationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('dashboard.message-notefications.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  ClubMessageNotefication $messageNotefication
     * @return View
     */
    public function show(ClubMessageNotefication $messageNotefication): View
    {
        if ($messageNotefication->status == 0) {
            $messageNotefication->update(['status' => 1]);
        }

        return view('dashboard.message-notefications.show', ['notefication' => $messageNotefication]);
    }
}
