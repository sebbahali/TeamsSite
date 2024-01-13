<?php

namespace App\Http\Controllers\Dashboard;

use App\Charts\CompetitionStateChart;
use App\Charts\PlayerState;
use App\Charts\PlayerStateChart;
use App\Enums\PlayerJoinStatus;
use App\Enums\CompetitionStatus;
use App\Enums\CompetitionType;
use App\Enums\LoanStatus;
use App\Enums\PlayerApproveStatus;
use App\Enums\TransferStatus;
use App\Http\Controllers\Controller;
use App\Models\Competition;
use App\Models\LoanPlayer;
use App\Models\Metting;
use App\Models\Player;
use App\Models\Team;
use App\Models\TransferPlayer;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $teams = Team::count();
        $players = Player::count();
        $playersReg = Player::where('join_status', PlayerApproveStatus::SendToClub)->count();
        $loanPlayers = LoanPlayer::where('status', LoanStatus::BasicTeamApprov)->count();
        $transferPlayers = TransferPlayer::where('status', TransferStatus::BasicTeamApprov)->count();
        $mettings = Metting::count();
        $competitions = Competition::where('status', '!=', CompetitionStatus::Draft)->count();
        $playerChart = $this->playerChart();
        $competitionChart = $this->competitionChart();
        return view('dashboard.index', [
            'playerChart' => $playerChart,
            'competitionChart' => $competitionChart,
            'teams' => $teams,
            'players' => $players,
            'playersReg' => $playersReg,
            'loanPlayers' => $loanPlayers,
            'transferPlayers' => $transferPlayers,
            'mettings' => $mettings,
            'competitions' => $competitions,
        ]);
    }

    /**
     * @return PlayerStateChart
     */
    protected function playerChart()
    {
        $playerChart = new PlayerStateChart();
        $data = [
            Player::where('join_status', PlayerJoinStatus::UnJoin->value)->count(),
            Player::where('join_status', PlayerJoinStatus::Affiliated->value)->count(),
            Player::where('join_status', PlayerJoinStatus::Loan->value)->count(),
            Player::where('join_status', PlayerJoinStatus::Stoped->value)->count(),
        ];
        $playerChart->labels([
            PlayerJoinStatus::UnJoin->value,
                PlayerJoinStatus::Affiliated->value,
                PlayerJoinStatus::Loan->value,
                PlayerJoinStatus::Stoped->value,
        ]);
        $playerChart->dataset('لاعب', 'pie', $data)->backgroundColor("#ee9703");
        return $playerChart;
}

/**
     * @return CompetitionStateChart
     */
    protected function competitionChart()
    {
        $competitionChart = new CompetitionStateChart();
        $data = [
            Competition::where('type', CompetitionType::FootBall)->count(),
            Competition::where('type', CompetitionType::HandBall)->count(),
            Competition::where('type', CompetitionType::VelleyBool)->count(),
            Competition::where('type', CompetitionType::BasketBall)->count(),
            Competition::where('type', CompetitionType::Hokey)->count(),
            Competition::where('type', CompetitionType::Tenis)->count(),
            Competition::where('type', CompetitionType::Cultural)->count(),
        ];
        $competitionChart->labels([
            CompetitionType::FootBall->value,
                CompetitionType::HandBall->value,
                CompetitionType::VelleyBool->value,
                CompetitionType::BasketBall->value,
                CompetitionType::Hokey->value,
                CompetitionType::Tenis->value,
                CompetitionType::Cultural->value,
        ]);
        $competitionChart->dataset('مسابقة', 'pie', $data)->backgroundColor("#ee9703");
        return $competitionChart;
}
}
