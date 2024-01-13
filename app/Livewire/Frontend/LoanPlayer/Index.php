<?php

namespace App\Http\Livewire\Frontend\LoanPlayer;

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
        $this->status = 'sended';
    }

    public function fetchLoans()
    {
        return LoanPlayer::where(function ($query) {
            if ($this->status == 'sended') {
                return $query->where('send_team_id', team()->id);
            } else {
                return $query->where('basic_team_id', team()->id);
            }
        })->with('player')->paginate(12);
    }

    public function render()
    {
        return view('livewire.frontend.loan-player.index', ['loans' => $this->fetchLoans()]);
    }
}
