<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\TeamMessageNotefication;
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
        return view('frontend.message-notefications.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  TeamMessageNotefication $messageNotefication
     * @return View
     */
    public function show(TeamMessageNotefication $messageNotefication): View
    {
        if ($messageNotefication->status == 0) {
            $messageNotefication->update(['status' => 1]);
        }

        return view('frontend.message-notefications.show', ['notefication' => $messageNotefication]);
    }
}
