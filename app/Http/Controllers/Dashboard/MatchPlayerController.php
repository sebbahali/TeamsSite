<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\CompetitionMatch;
use App\Models\MatchPlayer;
use Illuminate\Http\Request;

class MatchPlayerController extends Controller
{
    public function edit(CompetitionMatch $match, MatchPlayer $player)
    {
        $teamPlayers = MatchPlayer::where('match_id', $match->id)
            ->where('team_id', $player->team_id)
            ->get();

        return view('dashboard.match-players.edit', [
            'match' => $match,
            'player' => $player,
            'teamPlayers' => $teamPlayers,
        ]);
    }

    public function update(Request $request, CompetitionMatch $match, MatchPlayer $player)
    {
        $r = ['time' => $request->r, 'resone' => $request->rresone];
        $y = ['time' => $request->y, 'resone' => $request->yresone];
        $s = ['time' => $request->s, 'player' => $request->player];

        $player->update([
            'r' => $r,
            'y' => $y,
            's' => $s,
        ]);

        session()->flash('success_message', 'تم التعديل بنجاح');
        return to_route('dashboard.match-players.edit', ['match' => $match, 'player' => $player]);
    }

    public function addGoal(Request $request, CompetitionMatch $match, MatchPlayer $player)
    {
        $goals = $player->g;
        array_push($goals, $request->goal);

        $player->update([
            'g' => $goals,
        ]);

        session()->flash('success_message', 'تم اضاف الهدف بنجاح');
        return to_route('dashboard.match-players.edit', ['match' => $match, 'player' => $player]);
    }

    public function deleteGoal(CompetitionMatch $match, MatchPlayer $player, $index)
    {
        $goals = $player->g;
        unset($goals[$index]);

        $player->update([
            'g' => $goals,
        ]);

        session()->flash('success_message', 'تم اضاف الهدف بنجاح');
        return to_route('dashboard.match-players.edit', ['match' => $match, 'player' => $player]);
    }
}
