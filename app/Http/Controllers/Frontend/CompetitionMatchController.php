<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assistant;
use App\Models\Competition;
use App\Models\CompetitionMatch;
use App\Models\CompetitionTeam;
use App\Models\MatchAssistant;
use App\Models\MatchPlayer;
use App\Models\OutLoanPlayer;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class CompetitionMatchController extends Controller
{
    public function index(Competition $competition)
    {
        return view('frontend.competition-matches.index', ['competition' => $competition]);
    }

    public function show(Competition $competition, CompetitionMatch $match)
    {
        $players = MatchPlayer::where('match_id', $match->id)
            ->where('team_id', team()->id)
            ->get();

        $assistants = MatchAssistant::where('match_id', $match->id)
            ->where('team_id', team()->id)
            ->get();

        return view('frontend.competition-matches.show', [
            'competition' => $competition,
            'match' => $match,
            'players' => $players,
            'assistants' => $assistants,
        ]);
    }

    public function pdf(Competition $competition, CompetitionMatch $match)
    {
        $team = CompetitionTeam::where('competition_id', $match->competition_id)
            ->where('team_id', team()->id)->first();

        $inPlayers = MatchPlayer::where('match_id', $match->id)
            ->where('team_id', $team->team_id)
            ->where('type', 'in')
            ->get();

        $outPlayers = MatchPlayer::where('match_id', $match->id)
            ->where('team_id', $team->team_id)
            ->where('type', 'out')
            ->get();

        $assistants = MatchAssistant::where('match_id', $match->id)
            ->where('team_id', $team->team_id)
            ->get();

        return view('pdf.match-player-list', [
            'inPlayers' => $inPlayers,
            'outPlayers' => $outPlayers,
            'assistants' => $assistants,
            'team' => Team::find($team->team_id),
        ]);
    }
}
