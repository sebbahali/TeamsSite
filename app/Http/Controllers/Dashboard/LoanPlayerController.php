<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\LoanStatus;
use App\Http\Controllers\Controller;
use App\Models\LoanPlayer;
use App\Models\TeamNotefication;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LoanPlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('dashboard.loan-players.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  LoanPlayer  $loanPlayer
     * @return View
     */
    public function show(LoanPlayer $loanPlayer): View
    {
        return view('dashboard.loan-players.show', ['loan' => $loanPlayer]);
    }

    /**
     * Change Request State
     *
     * @param Request $request
     * @param LoanPlayer $loanPlayer
     * @return void
     */
    public function changeState(Request $request, LoanPlayer $loanPlayer): RedirectResponse
    {
        $request->validate([
            'note' => ['required', 'string'],
        ]);

        if (isset($request->agree) && $request->agree == 'agree') {
            $loanPlayer->status = LoanStatus::ClubApprove;
            session()->flash('success_message', 'تم الموافقة على الطلب بنجاح');

            TeamNotefication::create([
                'team_id' => $loanPlayer->basic_team_id,
                'title' => 'وافق النادي على طلب الاستعارة',
                'body' => $request->note,
                'link' => route('frontend.loan-players.show', $loanPlayer->id),
            ]);

            TeamNotefication::create([
                'team_id' => $loanPlayer->send_team_id,
                'title' => 'وافق النادي على طلب الاستعارة',
                'body' => $request->note,
                'link' => route('frontend.loan-players.show', $loanPlayer->id),
            ]);
        } elseif (isset($request->cancel) && $request->cancel == 'cancel') {
            $loanPlayer->status = LoanStatus::SendToBasicTeam;
            session()->flash('success_message', 'تم الغاء الطلب بنجاح');

            TeamNotefication::create([
                'team_id' => $loanPlayer->basic_team_id,
                'title' => 'الغى النادي طلب الاستعارة',
                'body' => $request->note,
                'link' => route('frontend.loan-players.show', $loanPlayer->id),
            ]);

            TeamNotefication::create([
                'team_id' => $loanPlayer->send_team_id,
                'title' => 'الغى النادي طلب الاستعارة',
                'body' => $request->note,
                'link' => route('frontend.loan-players.show', $loanPlayer->id),
            ]);
        }

        $loanPlayer->save();

        return to_route('dashboard.loan-players.show', $loanPlayer->id);
    }
}
