<?php

namespace App\Http\Livewire\Frontend\Competitions;

use App\Models\Assistant;
use App\Models\CompetitionTeam;
use Livewire\Component;

class AddAssistant extends Component
{
    public $teamCompetition;

    public $assistant;

    protected $rules = [
        'assistant' => 'required',
    ];

    public function mount(CompetitionTeam $teamCompetition)
    {
        $this->teamCompetition = $teamCompetition;
    }

    public function saveAssistant()
    {
        $this->validate();

        if (!is_null($this->teamCompetition->mange_members)) {
            if (count($this->teamCompetition->mange_members) >= $this->teamCompetition->competition->mange_member_count) {
                session()->flash('error_message', 'عذرا لايمكن اضافة عضو جهاز الفني');
                return redirect()->route('frontend.competitions.setup', $this->teamCompetition->competition_id);
            }
        }

        if (is_null($this->teamCompetition->mange_members)) {
            $assistants = [];
        } else {
            $assistants = $this->teamCompetition->mange_members;
        }

        if (in_array($this->assistant, $assistants)) {
            session()->flash('error_message', 'عذرا العضو مضاف للجنة مسبقا');
            return redirect()->route('frontend.competitions.setup', $this->teamCompetition->competition_id);
        }

        array_push($assistants, $this->assistant);
        $this->teamCompetition->update([
            'mange_members' => $assistants,
        ]);

        session()->flash('success_message', 'تم اضافة عضو الجهاز الفني بنجاح');
        return redirect()->route('frontend.competitions.setup', $this->teamCompetition->competition_id);
    }

    public function getAssistants()
    {
        return Assistant::where('team_id', team()->id)
            ->whereNotIn('id', $this->teamCompetition->mange_members)
            ->get();
    }

    public function render()
    {
        return view('livewire.frontend.competitions.add-assistant', [
            'assistants' => $this->getAssistants(),
        ]);
    }
}
