<?php

namespace App\Http\Livewire\Frontend\Competitions;

use App\Enums\LoanOutPlayerStatus;
use App\Models\CompetitionTeam;
use App\Models\OutLoanPlayer;
use Livewire\Component;

class AddLoanOutPlayer extends Component
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

        if (!is_null($this->teamCompetition->loan_out_players)) {
            if (count($this->teamCompetition->loan_out_players) >= $this->teamCompetition->competition->loan_out_count) {
                session()->flash('error_message', 'عذرا لا يمكن اضافة اللاعب');
                return redirect()->route('frontend.competitions.setup', $this->teamCompetition->competition_id);
            }
        }

        if (is_null($this->teamCompetition->loan_out_players)) {
            $loan_out_players = [];
        } else {
            $loan_out_players = $this->teamCompetition->loan_out_players;
        }

        if (in_array($this->player, $loan_out_players)) {
            session()->flash('error_message', 'عذرا اللاعب مضاف مسبقا');
            return redirect()->route('frontend.competitions.setup', $this->teamCompetition->competition_id);
        }

        array_push($loan_out_players, $this->player);
        $this->teamCompetition->update([
            'loan_out_players' => $loan_out_players,
        ]);

        session()->flash('success_message', 'تم اضافة اللاعب بنجاح');
        return redirect()->route('frontend.competitions.setup', $this->teamCompetition->competition_id);
    }

    public function getPlayers()
    {
        return OutLoanPlayer::where('team_id', team()->id)
            ->where('status', LoanOutPlayerStatus::Done)
            ->whereNotIn('card_id', $this->teamCompetition->loan_out_players)
            ->get();
    }

    public function render()
    {
        return view('livewire.frontend.competitions.add-loan-out-player', [
            'players' => $this->getPlayers(),
        ]);
    }
}
