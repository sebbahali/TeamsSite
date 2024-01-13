<?php

namespace App\Http\Livewire\Frontend\Competitions;

use App\Enums\PlayerJoinStatus;
use App\Models\CompetitionTeam;
use App\Models\Player;
use Livewire\Component;

class AddLoanInPlayer extends Component
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

        if (!is_null($this->teamCompetition->loan_in_players)) {
            if (count($this->teamCompetition->loan_in_players) >= $this->teamCompetition->competition->loan_in_count) {
                session()->flash('error_message', 'عذرا لا يمكن اضافة اللاعب');
                return redirect()->route('frontend.competitions.setup', $this->teamCompetition->competition_id);
            }
        }

        if (is_null($this->teamCompetition->loan_in_players)) {
            $loan_in_players = [];
        } else {
            $loan_in_players = $this->teamCompetition->loan_in_players;
        }

        if (in_array($this->player, $loan_in_players)) {
            session()->flash('error_message', 'عذرا اللاعب مضاف مسبقا');
            return redirect()->route('frontend.competitions.setup', $this->teamCompetition->competition_id);
        }

        array_push($loan_in_players, $this->player);
        $this->teamCompetition->update([
            'loan_in_players' => $loan_in_players,
        ]);

        session()->flash('success_message', 'تم اضافة اللاعب بنجاح');
        return redirect()->route('frontend.competitions.setup', $this->teamCompetition->competition_id);
    }

    public function getPlayers()
    {
        return Player::where('team_id', team()->id)
            ->where('join_status', PlayerJoinStatus::Loan)
            ->whereNotIn('card_id', $this->teamCompetition->loan_in_players)
            ->get();
    }

    public function render()
    {
        return view('livewire.frontend.competitions.add-loan-in-player', [
            'players' => $this->getPlayers(),
        ]);
    }
}
