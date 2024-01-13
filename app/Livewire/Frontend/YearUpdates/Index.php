<?php

namespace App\Http\Livewire\Frontend\YearUpdates;

use App\Enums\PlayerApproveStatus;
use App\Enums\PlayerJoinStatus;
use App\Enums\PlayerYearStatus;
use App\Enums\YearUpdateStatus;
use App\Models\Player;
use App\Models\Team;
use App\Models\YearUpdate;
use App\Models\YearUpdateTeam;
use Livewire\Component;

class Index extends Component
{
    public $yearUpdateTeam;

    public $yearUpdate;

    public function mount()
    {
        $this->yearUpdate = YearUpdate::where('status', 1)->first();
        $lastYearUpdate = YearUpdate::latest('id')->first();
        $this->yearUpdateTeam = YearUpdateTeam::where('team_id', team()->id)
            ->where('year_update_id', $lastYearUpdate->id)
            ->first();
    }

    public function fetchPlayers()
    {
        return Player::where('team_id', team()->id)
            ->where('approve_status', PlayerApproveStatus::Approved)
            ->where('join_status', '!=', PlayerJoinStatus::Stoped)
            ->where('join_status', '!=', PlayerJoinStatus::UnJoin)
            ->where('year_status', PlayerYearStatus::UnActive)
            ->with('team')
            ->get();
    }

    public function approve()
    {
        $this->yearUpdateTeam->status = YearUpdateStatus::Approve;
        $this->yearUpdateTeam->cost = $this->fetchPlayers()->count();
        $this->yearUpdateTeam->save();
        $this->yearUpdateTeam->fresh();
    }

    public function render()
    {
        return view('livewire.frontend.year-updates.index', ['players' => $this->fetchPlayers()]);
    }
}
