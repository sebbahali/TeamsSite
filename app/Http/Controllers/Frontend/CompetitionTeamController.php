<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\CompetitionTeamStatus;
use App\Enums\SuccessTransactionType;
use App\Http\Controllers\Controller;
use App\Models\Assistant;
use App\Models\ClubNotefication;
use App\Models\CompetitionTeam;
use App\Models\OutLoanPlayer;
use App\Models\Team;
use App\Models\Transaction;
use App\Services\PaymentService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CompetitionTeamController extends Controller
{
    public function deleteMember(CompetitionTeam $competitionTeam, $assistant)
    {
        if ($competitionTeam->team_id != team()->id) {
            session()->flash('error_message', 'ليس لديك الصلاحيات');
            return back();
        }

        $assistants = $competitionTeam->mange_members;
        if (!in_array($assistant, $assistants)) {
            session()->flash('error_message', 'عذرا هناك خطاء');
            return back();
        }

        $key = array_search($assistant, $assistants);
        if ($key !== false) {
            unset($assistants[$key]);

            $competitionTeam->mange_members = $assistants;
            $competitionTeam->save();

            session()->flash('success_message', 'تم حذف العضو بنجاح');
            return back();
        }

        return back();
    }

    public function deletePlayer(CompetitionTeam $competitionTeam, $player)
    {
        if ($competitionTeam->team_id != team()->id) {
            session()->flash('error_message', 'ليس لديك الصلاحيات');
            return back();
        }

        $players = $competitionTeam->players;
        if (!in_array($player, $players)) {
            session()->flash('error_message', 'عذرا هناك خطاء');
            return back();
        }

        $key = array_search($player, $players);
        if ($key !== false) {
            unset($players[$key]);

            $competitionTeam->players = $players;
            $competitionTeam->save();

            session()->flash('success_message', 'تم حذف اللاعب بنجاح');
            return back();
        }

        return back();
    }

    public function deleteLoanInPlayer(CompetitionTeam $competitionTeam, $player)
    {
        if ($competitionTeam->team_id != team()->id) {
            session()->flash('error_message', 'ليس لديك الصلاحيات');
            return back();
        }

        $loan_in_players = $competitionTeam->loan_in_players;
        if (!in_array($player, $loan_in_players)) {
            session()->flash('error_message', 'عذرا هناك خطاء');
            return back();
        }

        $key = array_search($player, $loan_in_players);
        if ($key !== false) {
            unset($loan_in_players[$key]);

            $competitionTeam->loan_in_players = $loan_in_players;
            $competitionTeam->save();

            session()->flash('success_message', 'تم حذف اللاعب بنجاح');
            return back();
        }

        return back();
    }


    public function deleteLoanOutPlayer(CompetitionTeam $competitionTeam, $player)
    {
        if ($competitionTeam->team_id != team()->id) {
            session()->flash('error_message', 'ليس لديك الصلاحيات');
            return back();
        }

        $loan_out_players = $competitionTeam->loan_out_players;
        if (!in_array($player, $loan_out_players)) {
            session()->flash('error_message', 'عذرا هناك خطاء');
            return back();
        }

        $key = array_search($player, $loan_out_players);
        if ($key !== false) {
            unset($loan_out_players[$key]);

            $competitionTeam->loan_out_players = $loan_out_players;
            $competitionTeam->save();

            session()->flash('success_message', 'تم حذف اللاعب بنجاح');
            return back();
        }

        return back();
    }


    public function register(CompetitionTeam $competitionTeam)
    {
        if ($competitionTeam->team_id != team()->id) {
            session()->flash('error_message', 'ليس لديك الصلاحيات');
            return back();
        }

        $competitionTeam->update([
            'status' => CompetitionTeamStatus::Register,
        ]);

        ClubNotefication::create([
            'club_id' => team()->club_id,
            'title' => 'تم اكمال التسجيل في المسابقة',
            'body' => 'لقد قام فريق' . team()->name . ' بأكمال التسجيل في مسابقة ' . $competitionTeam->competition->name,
            'link' => route('dashboard.competitions.show-team', [
                'competition' => $competitionTeam->competition,
                'competitionTeam' => $competitionTeam,
            ]),
        ]);

        session()->flash('success_message', 'تم التسجيل بنجاح');
        return to_route('frontend.competitions.index');
    }

    /**
     * Checkout
     *
     * @param CompetitionTeam $competitionTeam
     * @return RedirectResponse
     */
    public function checkout(CompetitionTeam $competitionTeam): RedirectResponse
    {
        $products = [
            [
                "name" => "مبلغ الاشتراك",
                "quantity" => 1,
                "unit_amount" => ($competitionTeam->competition->subscription_price * 1000),
            ],[
                "name" => "مبلغ التامين",
                "quantity" => 1,
                "unit_amount" => ($competitionTeam->competition->insurance_price * 1000),
            ],
        ];

        $customer = [
            'id' => team()->id,
            'name' => team()->name,
        ];

        $transaction = Transaction::create([
            'products' => $products,
        ]);

        $urls = [
            'success' => route('frontend.payments.success', [
                'type' => SuccessTransactionType::CompetitionTeam->value,
                'id' => $competitionTeam->id,
                'transaction_id' => $transaction->id,
            ]),
            'cancel' => route('frontend.payments.cancel'),
        ];

        $payment = new PaymentService();
        $checkout = $payment->createSession($products, $customer, $urls);

        $transaction->session_id = $checkout->data->session_id;

        return redirect($payment->urlToCheckout($checkout->data->session_id));
    }

    public function pdf(CompetitionTeam $competitionTeam)
    {
        $team = Team::find(team()->id);
        $players = $team->players()->whereIn('card_id', $competitionTeam->players)
            ->get();

        $loanInPlayers = $team->players()->whereIn('card_id', $competitionTeam->loan_in_players)
            ->get();

        $loanOutPlayers = OutLoanPlayer::where('team_id', $team->id)
            ->whereIn('card_id', $competitionTeam->loan_out_players)
            ->get();

        $assistants = Assistant::where('team_id', $team->id)
            ->whereIn('id', $competitionTeam->mange_members)
            ->get();

        return view('pdf.competion', [
            'players' => $players,
            'loanInPlayers' => $loanInPlayers,
            'loanOutPlayers' => $loanOutPlayers,
            'team' => $team,
            'assistants' => $assistants,
        ]);
    }
}
