<?php

namespace App\Http\Livewire\Dashboard\CompetitionMatches;

use App\Models\Competition;
use App\Models\CompetitionMatch;
use App\Models\CompetitionTeam;
use App\Models\Team;
use Carbon\Carbon;
use Livewire\Component;

class Edit extends Component
{
    public Competition $competition;

    public CompetitionMatch $match;

    public $teams;

    public $home;

    public $away;

    public $location;

    public $date;
    
    public $time;

    public $first_refree;

    public $second_refree;

    public $theree_refree;

    public $four_refree;

    public $five_refree;

    public $home_goals;

    public $away_goals;

    public $status;

    protected $rules = [
        'home' => ['required'],
        'away' => ['required'],
        'location' => ['required'],
        'date' => ['required'],
        'time' => ['required'],
    ];

    public function mount(Competition $competition, CompetitionMatch $match)
    {
        $this->competition = $competition;
        $this->match = $match;

        $competitionTeams = CompetitionTeam::select('team_id')->where('competition_id', $this->competition->id)->get();

        $teamList = [];
        foreach ($competitionTeams as $competitionTeam) {
            array_push($teamList, $competitionTeam->team_id);
        }

        $this->teams = Team::whereIn('id', $teamList)->get();

        $this->home = $this->match->home;
        $this->away = $this->match->away;
        $this->location = $this->match->location;
        $this->date = $this->match->match_time->format('Y-m-d');
        $this->time = $this->match->match_time->format('H:i:s');
        $this->first_refree = $this->match->first_refree;
        $this->second_refree = $this->match->second_refree;
        $this->theree_refree = $this->match->theree_refree;
        $this->four_refree = $this->match->four_refree;
        $this->five_refree = $this->match->five_refree;
        $this->home_goals = $this->match->home_goals;
        $this->away_goals = $this->match->away_goals;
        $this->status = $this->match->status->value;
    }

    public function submitForm()
    {
        $this->validate();

        $this->match->update([
            'competition_id' => $this->competition->id,
            'home' => $this->home,
            'away' => $this->away,
            'location' => $this->location,
            'match_time' => Carbon::parse("$this->date $this->time"),
            'first_refree' => $this->first_refree,
            'second_refree' => $this->second_refree,
            'theree_refree' => $this->theree_refree,
            'four_refree' => $this->four_refree,
            'five_refree' => $this->five_refree,
            'home_goals' => $this->home_goals,
            'away_goals' => $this->away_goals,
            'status' => $this->status,
        ]);

        session()->flash('success_message', 'تم تعديل المبارة بنجاح');

        return redirect()->route('dashboard.competition-matches.show', [
            'competition' => $this->competition,
            'match' => $this->match,
        ]);
    }

    public function render()
    {
        return view('livewire.dashboard.competition-matches.edit');
    }
}
