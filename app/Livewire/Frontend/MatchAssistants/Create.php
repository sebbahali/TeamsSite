<?php

namespace App\Http\Livewire\Frontend\MatchAssistants;

use App\Models\Assistant;
use App\Models\CompetitionMatch;
use App\Models\CompetitionTeam;
use App\Models\MatchAssistant;
use Livewire\Component;

class Create extends Component
{
    public CompetitionMatch $match;

    public CompetitionTeam $team;

    public $assistant;

    public $register_assistants = [];

    protected $rules = [
        'assistant' => ['required'],
    ];

    public function mount(CompetitionMatch $match)
    {
        $this->match = $match;

        $this->team = CompetitionTeam::where('competition_id', $match->competition_id)
            ->where('team_id', team()->id)->first();

        $this->register_assistants = MatchAssistant::select('assistant_id')
            ->where('team_id', $this->team->team_id)
            ->where('match_id', $this->match->id)
            ->get();
    }

    public function addAssistant()
    {
        $this->validate();

        $checkAssistant = MatchAssistant::where('team_id', $this->team->team_id)
            ->where('match_id', $this->match->id)
            ->where('assistant_id', $this->assistant)
            ->count();

        if ($checkAssistant > 0) {
            session()->flash("error_message", "عذرا هذا العضو تمت اضافته");
            return redirect()->route('frontend.match-assistants.create', ['match' => $this->match->id]);
        }

        MatchAssistant::create([
            'match_id' => $this->match->id,
            'team_id' => $this->team->team_id,
            'assistant_id' => $this->assistant,
        ]);

        session()->flash('success_message', 'تم اضافة العضو بنجاح');
        return redirect()->route('frontend.match-assistants.create', ['match' => $this->match->id]);
    }

    public function getAssistant()
    {
        return Assistant::where('team_id', '=', team()->id)
            ->whereNotIn('id', $this->register_assistants)
            ->get();
    }
    
    public function render()
    {
        return view('livewire.frontend.match-assistants.create', [
            'assistants' => $this->getAssistant(),
        ]);
    }
}
