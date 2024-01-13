<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\LoanOutPlayerStatus;
use App\Http\Controllers\Controller;
use App\Models\OutLoanPlayer;
use App\Models\Team;
use App\Models\TeamMessageNotefication;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OutLoanPlayerController extends Controller
{
    public function index(): View
    {
        return view('dashboard.out-loan-players.index');
    }

    public function show(OutLoanPlayer $outLoanPlayer)
    {
        return view('dashboard.out-loan-players.show', ['outLoanPlayer' => $outLoanPlayer]);
    }

    public function Approve(OutLoanPlayer $outLoanPlayer)
    {
        $outLoanPlayer->update([
            'status' => LoanOutPlayerStatus::ClubApprove,
        ]);

        TeamMessageNotefication::create([
            'team_id' => $outLoanPlayer->team_id,
            'title' => 'موافقة على طلب اعارة خارجي',
            'link' => route('frontend.out-loan-players.show', $outLoanPlayer->id),
            'body' => 'تم الموافقة على طلب اعارة لاعب خارجي',
        ]);


        $data['title'] = 'موافقة على طلب اعارة خارجي';
        $data['body'] = 'تم الموافقة على طلب اعارة لاعب خارجي';
        $data['out_loan_player_id'] = $outLoanPlayer->id;
        $data['type'] = 'club_approve_out_loan_player';
        $receiver = Team::find($outLoanPlayer->team_id);
        $receiver->sendNotification($data);
        session()->flash('success_message', 'تم الموافقة على الطلب');
        return to_route('dashboard.out-loan-players.index');
    }

    public function Cancel(OutLoanPlayer $outLoanPlayer)
    {
        $outLoanPlayer->update([
            'status' => LoanOutPlayerStatus::Draft,
        ]);

        TeamMessageNotefication::create([
            'team_id' => $outLoanPlayer->team_id,
            'title' => 'الغاء طلب اعارة خارجي',
            'link' => route('frontend.out-loan-players.show', $outLoanPlayer->id),
            'body' => 'تم الغاء طلب اعارة لاعب خارجي',
        ]);
        $data['title'] = 'الغاء طلب اعارة خارجي';
        $data['body'] = 'تم الغاء طلب اعارة لاعب خارجي';
        $data['out_loan_player_id'] = $outLoanPlayer->id;
        $data['type'] = 'club_cancel_out_loan_player';
        $receiver = Team::find($outLoanPlayer->team_id);
        $receiver->sendNotification($data);
        session()->flash('success_message', 'تم الغاء الطلب بنجاح');
        return to_route('dashboard.out-loan-players.index');
    }
}
