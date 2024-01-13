<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\ClubTeamMessageSender;
use App\Http\Controllers\Controller;
use App\Models\ClubTeamMessage;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClubTeamMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('frontend.club-team-messages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('frontend.club-team-messages.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return View
     */
    public function show($id): View
    {
        $message = ClubTeamMessage::with('replys')->findOrFail($id);

        if ($message->team_id != team()->id) {
            abort(403);
        }

        $message_code = ($message->sender == ClubTeamMessageSender::Club) ?
            $message->club()->club->message_code :
            $message->team()->message_code;

        return view('frontend.club-team-messages.show', ['message' => $message, 'message_code' => $message_code]);
    }
}
