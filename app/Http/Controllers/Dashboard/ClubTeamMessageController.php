<?php

namespace App\Http\Controllers\Dashboard;

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
        return view('dashboard.club-team-messages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function groupMessageCreate(): View
    {
        return view('dashboard.club-team-messages.group-create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('dashboard.club-team-messages.create');
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

//        if ($message->user_id != auth('web')->user()->id) {
//            abort(403);
//        }

        $message_code = ($message->sender == ClubTeamMessageSender::Club) ?
            $message->club()->club->message_code :
            $message->team()->message_code;

        return view('dashboard.club-team-messages.show', ['message' => $message, 'message_code' => $message_code]);
    }
}
