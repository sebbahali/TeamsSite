<?php

namespace App\Http\Livewire\Frontend\TransferPlayers;

use App\Models\TransferPlayer;
use Livewire\Component;

class Index extends Component
{
    public $status;

    public function mount()
    {
        $this->status = 'sended';
    }

    public function fetchTransfer()
    {
        return TransferPlayer::where(function ($query) {
            if ($this->status == 'sended') {
                return $query->where('send_team_id', team()->id);
            } else {
                return $query->where('basic_team_id', team()->id);
            }
        })->with('player')->paginate(12);
    }

    public function render()
    {
        return view('livewire.frontend.transfer-players.index', ['transfers' => $this->fetchTransfer()]);
    }
}
