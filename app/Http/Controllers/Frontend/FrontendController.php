<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\LoanStatus;
use App\Enums\PlayerApproveStatus;
use App\Enums\PlayerJoinStatus;
use App\Enums\PlayerYearStatus;
use App\Enums\TransferStatus;
use App\Http\Controllers\Controller;
use App\Models\LoanPlayer;
use App\Models\Player;
use App\Models\TransferPlayer;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FrontendController extends Controller
{
    public function index(): View
    {
        $players = Player::where('team_id', team()->id)
            ->where('join_status', '!=', PlayerJoinStatus::Stoped)
            ->where('join_status', '!=', PlayerJoinStatus::UnJoin)
            ->where('approve_status', PlayerApproveStatus::Approved)
            ->where('year_status', PlayerYearStatus::Active)
            ->count();

        $loanPlayers = LoanPlayer::where('basic_team_id', team()->id)
            ->where('status', LoanStatus::SendToBasicTeam)
            ->count();

        $transferPlayers = TransferPlayer::where('basic_team_id', team()->id)
            ->where('status', TransferStatus::SendToBasicTeam)
            ->count();

        return view('frontend.index', [
            'players' => $players,
            'loanPlayers' => $loanPlayers,
            'transferPlayers' => $transferPlayers,
        ]);
    }
}
