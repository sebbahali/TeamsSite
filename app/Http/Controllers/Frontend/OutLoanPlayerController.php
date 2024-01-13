<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\LoanOutPlayerStatus;
use App\Enums\SuccessTransactionType;
use App\Http\Controllers\Controller;
use App\Models\OutLoanPlayer;
use App\Models\Transaction;
use App\Services\PaymentService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class OutLoanPlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outLoanPlayers = OutLoanPlayer::where('team_id', team()->id)
            ->where('status', '!=', LoanOutPlayerStatus::Expired)
            ->paginate(12);

        return view('frontend.out-loan-players.index', ['outLoanPlayers' => $outLoanPlayers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('frontend.out-loan-players.create');
    }

    /**
     * Display the specified resource.
     *
     * @param $outLoanPlayer
     * @return View|RedirectResponse
     */
    public function show($outLoanPlayer): View|RedirectResponse
    {
        $outLoanPlayer = OutLoanPlayer::find($outLoanPlayer);

        if ($outLoanPlayer->team_id != team()->id) {
            session()->flash('error_message', 'ليس لديك الصلاحيات');
            return to_route('frontend.out-loan-players.index');
        }

        return view('frontend.out-loan-players.show', ['outLoanPlayer' => $outLoanPlayer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  OutLoanPlayer $outLoanPlayer
     * @return View|RedirectResponse
     */
    public function edit(OutLoanPlayer $outLoanPlayer)
    {
        if ($outLoanPlayer->team_id != team()->id) {
            session()->flash('error_message', 'ليس لديك الصلاحيات');
            return to_route('frontend.out-loan-players.index');
        }

        return view('frontend.out-loan-players.edit', ['outLoanPlayer' => $outLoanPlayer]);
    }

    /**
     * Send Request Order
     *
     * @param OutLoanPlayer $outLoanPlayer
     * @return RedirectResponse
     */
    public function sendToClub(OutLoanPlayer $outLoanPlayer): RedirectResponse
    {
        if ($outLoanPlayer->team_id != team()->id) {
            session()->flash('error_message', 'ليس لديك الصلاحيات');
            return to_route('frontend.out-loan-players.index');
        }

        $outLoanPlayer->status = LoanOutPlayerStatus::SendToClub;
        $outLoanPlayer->save();

        session()->flash('success_message', 'تم ارسال الطلب الى النادي');
        return to_route('frontend.out-loan-players.show', $outLoanPlayer);
    }

    /**
     * Checkout
     *
     * @param OutLoanPlayer $loan
     * @return RedirectResponse
     */
    public function checkout(OutLoanPlayer $loan): RedirectResponse
    {
        $products = [
            [
                "name" => "طلب استعارة لاعب خارجي",
                "quantity" => 1,
                "unit_amount" => 30000,
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
                'type' => SuccessTransactionType::OutLoanPlayer->value,
                'id' => $loan->id,
                'transaction_id' => $transaction->id,
            ]),
            'cancel' => route('frontend.payments.cancel'),
        ];

        $payment = new PaymentService();
        $checkout = $payment->createSession($products, $customer, $urls);

        $transaction->session_id = $checkout->data->session_id;

        return redirect($payment->urlToCheckout($checkout->data->session_id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  OutLoanPlayer  $outLoanPlayer
     * @return RedirectResponse
     */
    public function destroy(OutLoanPlayer $outLoanPlayer): RedirectResponse
    {
        if ($outLoanPlayer->team_id != team()->id) {
            session()->flash('error_message', 'ليس لديك الصلاحيات');
            return to_route('frontend.out-loan-players.index');
        }

        Storage::delete($outLoanPlayer->sport_image);
        Storage::delete($outLoanPlayer->front_card_image);
        Storage::delete($outLoanPlayer->loan_letter);

        $outLoanPlayer->delete();

        session()->flash('success_message', 'تم الحذف بنجاح');
        return to_route('frontend.out-loan-players.index');
    }
}
