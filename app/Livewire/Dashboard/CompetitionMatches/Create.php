<?php

namespace App\Http\Livewire\Dashboard\CompetitionMatches;

use App\Models\Competition;
use App\Models\CompetitionMatch;
use App\Models\CompetitionTeam;
use App\Models\MatchPlayer;
use App\Models\Team;
use Carbon\Carbon;
use Livewire\Component;

class Create extends Component
{
    public Competition $competition;

    public $teams;

    public $home;

    public $away;

    public $location;

    public $date;
    
    public $time;

    protected $rules = [
        'home' => ['required'],
        'away' => ['required'],
        'location' => ['required'],
        'date' => ['required'],
        'time' => ['required'],
    ];

    public function mount(Competition $competition)
    {
        $this->competition = $competition;

        $competitionTeams = CompetitionTeam::select('team_id')->where('competition_id', $this->competition->id)->get();

        $teamList = [];
        foreach ($competitionTeams as $competitionTeam) {
            array_push($teamList, $competitionTeam->team_id);
        }

        $this->teams = Team::whereIn('id', $teamList)->get();
    }

    public function submitForm()
    {
        $this->validate();

        $match = CompetitionMatch::create([
            'competition_id' => $this->competition->id,
            'home' => $this->home,
            'away' => $this->away,
            'location' => $this->location,
            'match_time' => Carbon::parse("$this->date $this->time"),
        ]);

        session()->flash('success_message', 'تم اضافة المبارة بنجاح');

        return redirect()->route('dashboard.competition-matches.show', ['competition' => $this->competition, 'match' => $match]);
    }

    public function render()
    {
        return view('livewire.dashboard.competition-matches.create');
    }
}
