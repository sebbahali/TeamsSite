<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ClubMessage;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClubMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('dashboard.club-messages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('dashboard.club-messages.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return View
     */
    public function show($id): View
    {
        $message = ClubMessage::with('replys')->findOrFail($id);

        if ($message->sender_id != auth('web')->user()->id && $message->receiver_id != auth('web')->user()->id) {
            abort(403);
        }

        return view('dashboard.club-messages.show', ['message' => $message]);
    }
}
