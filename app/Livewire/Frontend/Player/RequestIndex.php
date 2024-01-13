<?php

namespace App\Http\Livewire\Frontend\Player;

use App\Enums\PlayerApproveStatus;
use App\Models\Player;
use Livewire\Component;

class RequestIndex extends Component
{
    public $status;

    public function mount()
    {
        $this->status = PlayerApproveStatus::Draft->value;
    }

    public function fetchPlayers()
    {
        return Player::orderBy('created_at', 'DESC')
            ->where('team_id', team()->id)
            ->where('approve_status', $this->status)
            ->with('team')
            ->paginate(12);
    }

    public function render()
    {
        return view('livewire.frontend.player.request-index', [
            'players' => $this->fetchPlayers(),
        ]);
    }
}
