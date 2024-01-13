<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\CompetitionTeamStatus;
use App\Enums\LoanOutPlayerStatus;
use App\Enums\LoanStatus;
use App\Enums\PlayerApproveStatus;
use App\Enums\PlayerJoinStatus;
use App\Enums\PlayerYearStatus;
use App\Enums\SuccessTransactionType;
use App\Enums\TransferStatus;
use App\Enums\YearUpdateStatus;
use App\Http\Controllers\Controller;
use App\Models\ClubNotefication;
use App\Models\CompetitionTeam;
use App\Models\LoanPlayer;
use App\Models\OutLoanPlayer;
use App\Models\Player;
use App\Models\Transaction;
use App\Models\TransferPlayer;
use App\Models\YearUpdateTeam;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function success(SuccessTransactionType $type, $id, $transaction_id)
    {
        if ($type == SuccessTransactionType::RegisterPlayer) {
            $player = Player::find($id);
            $transaction = Transaction::find($transaction_id);

            $transaction->status = 'paid';
            $transaction->save();

            $player->transaction_id = $transaction_id;
            $player->approve_status = PlayerApproveStatus::Paid;
            // $player->register_number = registerNumber();
            // $player->join_status = PlayerJoinStatus::Affiliated;
            $player->save();

            session()->flash('success_message', 'تم الدفع بنجاح');
            return to_route('frontend.players.show', $id);
        } elseif ($type == SuccessTransactionType::LoanRequest) {
            $loan = LoanPlayer::find($id);
            $transaction = Transaction::find($transaction_id);

            $transaction->status = 'paid';
            $transaction->save();

            $loan->transaction_id = $transaction_id;
            $loan->status = LoanStatus::Done;
            $loan->save();

            $p = Player::find($loan->player->card_id);
            $p->team_id = $loan->send_team_id;
            $p->join_status = PlayerJoinStatus::Loan;
            $p->save();

            session()->flash('success_message', 'تم الدفع بنجاح');
            return to_route('frontend.loan-players.show', $id);
        } elseif ($type == SuccessTransactionType::TransferRequest) {
            $transfer = TransferPlayer::find($id);
            $transaction = Transaction::find($transaction_id);

            $transaction->status = ' ';
            $transaction->save();

            $transfer->transaction_id = $transaction_id;
            $transfer->status = TransferStatus::Done;
            $transfer->save();

            $p = Player::find($transfer->player->card_id);
            $p->team_id = $transfer->send_team_id;
            $p->save();

            session()->flash('success_message', 'تم الدفع بنجاح');
            return to_route('frontend.transfer-players.show', $id);
        } elseif ($type == SuccessTransactionType::YearUpdate) {
            $year = YearUpdateTeam::find($id);
            $transaction = Transaction::find($transaction_id);

            $transaction->status = 'paid';
            $transaction->save();

            Player::where('team_id', team()->id)
                ->where('approve_status', PlayerApproveStatus::Approved)
                ->where('join_status', '!=', PlayerJoinStatus::Stoped)
                ->where('join_status', '!=', PlayerJoinStatus::UnJoin)
                ->where('year_status', PlayerYearStatus::UnActive)
                ->update(['year_status' => PlayerYearStatus::Active]);

            $year->status = YearUpdateStatus::Updated;
            $year->save();

            session()->flash('success_message', 'تم الدفع بنجاح');
            return to_route('frontend.year-updates.show');
        } elseif ($type == SuccessTransactionType::OutLoanPlayer) {
            $outLoan = OutLoanPlayer::find($id);
            $transaction = Transaction::find($transaction_id);

            $transaction->status = 'paid';
            $transaction->save();

            $outLoan->status = LoanOutPlayerStatus::Done;
            $outLoan->save();

            session()->flash('success_message', 'تم الدفع بنجاح');
            return to_route('frontend.out-loan-players.show', $outLoan->id);
        } elseif ($type == SuccessTransactionType::CompetitionTeam) {
            $competitionTeam = CompetitionTeam::find($id);
            $transaction = Transaction::find($transaction_id);

            $transaction->status = 'pid';
            $transaction->save();

            $competitionTeam->update([
                'status' => CompetitionTeamStatus::Paid,
            ]);

            ClubNotefication::create([
                'club_id' => team()->club_id,
                'title' => 'تم سداد رسوم المسابقة',
                'body' => 'لقد قام فريق' . team()->name . ' بسداد رسوم مسابقة ' . $competitionTeam->competition->name,
                'link' => route('dashboard.competitions.show-team', [
                    'competition' => $competitionTeam->competition,
                    'competitionTeam' => $competitionTeam,
                ]),
            ]);

            session()->flash('success_message', 'تم الدفع بنجاح');
            return to_route('frontend.competitions.index');
        }
    }

    public function cancel()
    {
        session()->flash('error_message', 'تم الغاء عملية الدفع');

        return to_route('frontend.index');
    }
}
