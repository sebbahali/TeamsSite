<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\TeamMessage;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TeamMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('frontend.team-messages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('frontend.team-messages.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return View
     */
    public function show($id): View
    {
        $message = TeamMessage::with('replys')->findOrFail($id);

        if ($message->sender_id != team()->id && $message->receiver_id != team()->id) {
            abort(403);
        }

        return view('frontend.team-messages.show', ['message' => $message]);
    }
}
