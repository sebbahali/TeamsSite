<?php

namespace App\Http\Livewire\Dashboard\Player;

use App\Enums\PlayerApproveStatus;
use App\Models\Player;
use Livewire\Component;
use Livewire\WithPagination;

class RequestIndex extends Component
{
    use WithPagination;
    
    public $status;

    public function mount()
    {
        $this->status = PlayerApproveStatus::SendToClub->value;
    }

    public function fetchPlayers()
    {
        return Player::orderBy('created_at', 'DESC')
            ->where('approve_status', $this->status)
            ->with('team')
            ->paginate(12);
    }

    public function render()
    {
        return view('livewire.dashboard.player.request-index', [
            'players' => $this->fetchPlayers(),
        ]);
    }
}
