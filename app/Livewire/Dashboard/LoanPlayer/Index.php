<?php

namespace App\Http\Livewire\Dashboard\LoanPlayer;

use App\Enums\LoanStatus;
use App\Models\LoanPlayer;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    
    public $status;

    public function mount()
    {
        $this->status = LoanStatus::BasicTeamApprov->value;
    }

    public function fetchLoans()
    {
        return LoanPlayer::where('status', $this->status)->paginate(12);
    }

    public function render()
    {
        return view('livewire.dashboard.loan-player.index', ['loans' => $this->fetchLoans()]);
    }
}
