<?php

namespace App\Http\Livewire\Dashboard\TransferPlayers;

use App\Enums\TransferStatus;
use App\Models\TransferPlayer;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    
    public $status;

    public function mount()
    {
        $this->status = TransferStatus::BasicTeamApprov->value;
    }

    public function fetchTransfer()
    {
        return TransferPlayer::where('status', $this->status)->paginate(12);
    }

    public function render()
    {
        return view('livewire.dashboard.transfer-players.index', ['transfers' => $this->fetchTransfer()]);
    }
}
