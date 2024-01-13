<?php

namespace App\Http\Livewire\Dashboard\OutLoanPlayers;

use App\Enums\LoanOutPlayerStatus;
use App\Models\OutLoanPlayer;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    
    public $status;

    public function mount()
    {
        $this->status = LoanOutPlayerStatus::SendToClub->value;
    }

    public function fetchOutLoans()
    {
        return OutLoanPlayer::where('status', $this->status)->paginate(12);
    }

    public function render()
    {
        return view('livewire.dashboard.out-loan-players.index', [
            'outLoanPlayers' => $this->fetchOutLoans(),
        ]);
    }
}
