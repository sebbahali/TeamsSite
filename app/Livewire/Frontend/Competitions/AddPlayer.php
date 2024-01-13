<?php

namespace App\Http\Livewire\Frontend\Competitions;

use App\Enums\PlayerJoinStatus;
use App\Models\CompetitionTeam;
use App\Models\Player;
use Livewire\Component;

class AddPlayer extends Component
{
    public $teamCompetition;

    public $player;

    protected $rules = [
        'player' => 'required',
    ];

    public function mount(CompetitionTeam $teamCompetition)
    {
        $this->teamCompetition = $teamCompetition;
    }

    public function savePlayer()
    {
        $this->validate();

        if (!is_null($this->teamCompetition->players)) {
            $pCount = ($this->teamCompetition->competition->player_count + $this->teamCompetition->competition->loan_in_count + $this->teamCompetition->competition->loan_out_count);
            if (count($this->teamCompetition->players) >= $pCount) {
                session()->flash('error_message', 'عذرا لا يمكن اضافة اللاعب');
                return redirect()->route('frontend.competitions.setup', $this->teamCompetition->competition_id);
            }
        }

        if (is_null($this->teamCompetition->players)) {
            $players = [];
        } else {
            $players = $this->teamCompetition->players;
        }

        if (in_array($this->player, $players)) {
            session()->flash('error_message', 'عذرا اللاعب مضاف مسبقا');
            return redirect()->route('frontend.competitions.setup', $this->teamCompetition->competition_id);
        }

        array_push($players, $this->player);
        $this->teamCompetition->update([
            'players' => $players,
        ]);

        session()->flash('success_message', 'تم اضافة اللاعب بنجاح');
        return redirect()->route('frontend.competitions.setup', $this->teamCompetition->competition_id);
    }

    public function getPlayers()
    {
        return Player::where('team_id', team()->id)
            ->where('join_status', PlayerJoinStatus::Affiliated)
            ->whereNotIn('card_id', $this->teamCompetition->players)
            ->get();
    }

    public function render()
    {
        return view('livewire.frontend.competitions.add-player', [
            'players' => $this->getPlayers(),
        ]);
    }
}
