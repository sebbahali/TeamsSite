<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CompetitionMatch;
use App\Models\MatchPlayer;
use Illuminate\Http\Request;

class MatchPlayerController extends Controller
{
    public function create(CompetitionMatch $match)
    {
        if ($match->home != team()->id && $match->away != team()->id) {
            session()->flash("error_message", 'عذرا لا يمكنك فتح هذه الصفحة');
            return to_route('frontend.index');
        }
        $match->isOpenForTeam();

        return view('frontend.match-players.create', ['match' => $match]);
    }

    public function destroy(CompetitionMatch $match, MatchPlayer $player)
    {
        $player->delete();

        session()->flash('success_message', 'تم حذف اللاعب بنجاح');

        return back();
    }
}
