<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\TransferStatus;
use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\TeamNotefication;
use App\Models\TransferPlayer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TransferPlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('dashboard.transfer-players.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  TransferPlayer  $transferPlayer
     * @return View
     */
    public function show(TransferPlayer $transferPlayer): View
    {
        return view('dashboard.transfer-players.show', ['transfer' => $transferPlayer]);
    }

    /**
     * Change Request State
     *
     * @param Request $request
     * @param TransferPlayer $transferPlayer
     * @return void
     */
    public function changeState(Request $request, TransferPlayer $transferPlayer): RedirectResponse
    {
        $request->validate([
            'note' => ['required', 'string'],
        ]);

        if (isset($request->agree) && $request->agree == 'agree') {
            $transferPlayer->status = TransferStatus::ClubApprove;
            session()->flash('success_message', 'تم الموافقة على الطلب بنجاح');

            TeamNotefication::create([
                'team_id' => $transferPlayer->basic_team_id,
                'title' => 'وافق النادي على طلب النقل',
                'body' => $request->note,
                'link' => route('frontend.transfer-players.show', $transferPlayer->id),
            ]);

            TeamNotefication::create([
                'team_id' => $transferPlayer->send_team_id,
                'title' => 'وافق النادي على طلب النقل',
                'body' => $request->note,
                'link' => route('frontend.transfer-players.show', $transferPlayer->id),
            ]);

            $data['title'] = 'وافق النادي على طلب النقل';
            $data['body'] = $request->note;
            $data['transfer_player_id'] = $transferPlayer->id;
            $data['type'] = 'club_accept_transfer_player';
            $receiver = Team::find($transferPlayer->send_team_id);
            $sender = Team::find($transferPlayer->basic_team_id);
            $receiver->sendNotification($data);
            $sender->sendNotification($data);

        } elseif (isset($request->cancel) && $request->cancel == 'cancel') {
            $transferPlayer->status = TransferStatus::SendToBasicTeam;
            session()->flash('success_message', 'تم الغاء الطلب بنجاح');

            TeamNotefication::create([
                'team_id' => $transferPlayer->basic_team_id,
                'title' => 'الغى النادي طلب النقل',
                'body' => $request->note,
                'link' => route('frontend.transfer-players.show', $transferPlayer->id),
            ]);

            TeamNotefication::create([
                'team_id' => $transferPlayer->send_team_id,
                'title' => 'الغى النادي طلب النقل',
                'body' => $request->note,
                'link' => route('frontend.transfer-players.show', $transferPlayer->id),
            ]);

            $data['title'] = 'الغى النادي طلب النقل';
            $data['body'] = $request->note;
            $data['transfer_player_id'] = $transferPlayer->id;
            $data['type'] = 'club_cancel_transfer_player';
            $receiver = Team::find($transferPlayer->send_team_id);
            $sender = Team::find($transferPlayer->basic_team_id);
            $receiver->sendNotification($data);
            $sender->sendNotification($data);
        }

        $transferPlayer->save();

        return to_route('dashboard.transfer-players.show', $transferPlayer->id);
    }
}
