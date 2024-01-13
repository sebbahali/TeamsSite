<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\MatchStatus;
use App\Http\Controllers\Controller;
use App\Models\Competition;
use App\Models\CompetitionMatch;
use App\Models\MatchAssistant;
use App\Models\MatchPlayer;
use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;

class CompetitionMatchController extends Controller
{
    public function index(Competition $competition)
    {
        return view('dashboard.competition-matches.index', ['competition' => $competition]);
    }

    public function create(Competition $competition)
    {
        return view('dashboard.competition-matches.create', ['competition' => $competition]);
    }

    public function show(Competition $competition, CompetitionMatch $match)
    {
        $homePlayers = MatchPlayer::where('match_id', $match->id)
            ->where('team_id', $match->home)
            ->get();

        $awayPlayers = MatchPlayer::where('match_id', $match->id)
            ->where('team_id', $match->away)
            ->get();

        $homeAssistants = MatchAssistant::where('match_id', $match->id)
            ->where('team_id', $match->home)
            ->get();

        $awayAssistants = MatchAssistant::where('match_id', $match->id)
            ->where('team_id', $match->away)
            ->get();

        return view('dashboard.competition-matches.show', [
            'competition' => $competition,
            'match' => $match,
            'homePlayers' => $homePlayers,
            'awayPlayers' => $awayPlayers,
            'homeAssistants' => $homeAssistants,
            'awayAssistants' => $awayAssistants,
        ]);
    }

    public function edit(Competition $competition, CompetitionMatch $match)
    {
        return view('dashboard.competition-matches.edit', [
            'competition' => $competition,
            'match' => $match,
        ]);
    }

    public function destroy(Competition $competition, CompetitionMatch $match)
    {
        $match->delete();

        session()->flash('success_message', 'تم حذف المبارة بنجاح');

        return to_route('dashboard.competition-matches.index', $competition);
    }

    public function refreeReport(Competition $competition, CompetitionMatch $match)
    {
        if ($match->status != MatchStatus::End) {
            session()->flash('error_message', 'عذرا لا يمكنك فتح هذه الصفحة');
            return to_route('dashboard.competition-matches.index', $competition);
        }

        return view('dashboard.competition-matches.refree-report', [
            'competition' => $competition,
            'match' => $match,
        ]);
    }

    public function adminReport(Competition $competition, CompetitionMatch $match)
    {
        if ($match->status != MatchStatus::End) {
            session()->flash('error_message', 'عذرا لا يمكنك فتح هذه الصفحة');
            return to_route('dashboard.competition-matches.index', $competition);
        }

        return view('dashboard.competition-matches.admin-report', [
            'competition' => $competition,
            'match' => $match,
        ]);
    }

    public function refreeReportPdf(Competition $competition, CompetitionMatch $match)
    {
        if ($match->status != MatchStatus::End) {
            session()->flash('error_message', 'عذرا لا يمكنك فتح هذه الصفحة');
            return to_route('dashboard.competition-matches.index', $competition);
        }

        return view('pdf.refree-report', [
            'competition' => $competition,
            'match' => $match,
        ]);
    }

    public function adminReportPdf(Competition $competition, CompetitionMatch $match)
    {
        if ($match->status != MatchStatus::End) {
            session()->flash('error_message', 'عذرا لا يمكنك فتح هذه الصفحة');
            return to_route('dashboard.competition-matches.index', $competition);
        }

        return view('pdf.admin-report', [
            'competition' => $competition,
            'match' => $match,
        ]);
    }

    public function pdf(Competition $competition, CompetitionMatch $match)
    {
        $inHomePlayers = MatchPlayer::where('match_id', $match->id)
            ->where('team_id', $match->home)
            ->where('type', 'in')
            ->get();

        $outHomePlayers = MatchPlayer::where('match_id', $match->id)
            ->where('team_id', $match->home)
            ->where('type', 'out')
            ->get();

        $inAwayPlayers = MatchPlayer::where('match_id', $match->id)
            ->where('team_id', $match->away)
            ->where('type', 'in')
            ->get();
        
        $outAwayPlayers = MatchPlayer::where('match_id', $match->id)
            ->where('team_id', $match->away)
            ->where('type', 'out')
            ->get();

        $homeAssistants = MatchAssistant::where('match_id', $match->id)
            ->where('team_id', $match->home)
            ->get();

        $awayAssistants = MatchAssistant::where('match_id', $match->id)
            ->where('team_id', $match->away)
            ->get();

        return view('pdf.match', [
            'competition' => $competition,
            'match' => $match,
            'inHomePlayers' => $inHomePlayers,
            'outHomePlayers' => $outHomePlayers,
            'inAwayPlayers' => $inAwayPlayers,
            'outAwayPlayers' => $outAwayPlayers,
            'homeAssistants' => $homeAssistants,
            'awayAssistants' => $awayAssistants,
        ]);

        // $filePath = storage_path() . '/app/livewire-tmp/' . rand(111111111, 999999999) . '.pdf';

        // Browsershot::html($html)
        //     ->emulateMedia('screen')
        //     ->showBackground()
        //     ->margins(10, 10, 10, 10)
        //     ->format('A4')
        //     ->landscape()
        //     ->save($filePath);
    
        // return response()->make(file_get_contents($filePath), 200, [
        //     'Content-Type' => 'application/pdf',
        // ]);
    }
}
