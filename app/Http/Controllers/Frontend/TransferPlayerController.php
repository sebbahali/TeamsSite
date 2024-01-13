<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\LoanStatus;
use App\Enums\PlayerApproveStatus;
use App\Enums\SuccessTransactionType;
use App\Enums\TransferStatus;
use App\Http\Controllers\Controller;
use App\Models\ClubNotefication;
use App\Models\Player;
use App\Models\TeamNotefication;
use App\Models\Transaction;
use App\Models\TransferPlayer;
use App\Services\PaymentService;
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
        $searchPlayers = [];

        if (request('search') != null) {
            $searchPlayers = Player::where('team_id', '!=', team()->id)
                ->where('approve_status', PlayerApproveStatus::Approved)
                ->where('card_id', request('search'))
                ->get();
        }

        return view('frontend.transfer-players.index', ['searchPlayers' => $searchPlayers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Player $player
     * @return View
     */
    public function create(Player $player): View
    {
        return view('frontend.transfer-players.create', ['player' => $player]);
    }

    /**
     * Display the specified resource.
     *
     * @param  TransferPlayer  $transferPlayer
     * @return View
     */
    public function show(TransferPlayer $transferPlayer): View
    {
        return view('frontend.transfer-players.show', ['transfer' => $transferPlayer]);
    }

    /**
     * Basic Team Approve
     *
     * @param TransferPlayer $transfer
     * @return RedirectResponse
     */
    public function basicApprove(TransferPlayer $transfer): RedirectResponse
    {
        if ($transfer->basic_team_id != team()->id) {
            session()->flash('success_message', 'ليس لديك صلاحيات لعرض هذه الصفحة');

            return back();
        }

        $transfer->status = TransferStatus::BasicTeamApprov;
        $transfer->save();

        ClubNotefication::create([
            'club_id' => team()->club_id,
            'title' => 'طلب نقل جديد',
            'body' => 'طلب نقل جديد الرجاء مراجعته',
            'link' => route('dashboard.transfer-players.show', $transfer->id),
        ]);

        TeamNotefication::create([
            'team_id' => $transfer->send_team_id,
            'title' => 'وافق الفريق الاساسي على طلب النقل',
            'body' => 'لقد وافق الفريق الاساسي على طلب النقل في انتظار موافقة النادي',
            'link' => route('frontend.transfer-players.show', $transfer->id),
        ]);

        session()->flash('success_message', 'تم الموافقة على الطلب بنجاح');
        return to_route('frontend.transfer-players.show', $transfer->id);
    }

    /**
     * Basic Team Cancel
     *
     * @param Request $request
     * @param TransferPlayer $transfer
     * @return RedirectResponse
     */
    public function basicCancel(TransferPlayer $transfer, Request $request): RedirectResponse
    {
        if ($transfer->basic_team_id != team()->id) {
            session()->flash('success_message', 'ليس لديك صلاحيات لعرض هذه الصفحة');

            return back();
        }

        $transfer->delete();

        TeamNotefication::create([
            'team_id' => $transfer->send_team_id,
            'title' => 'تم الغاء طلب النقل',
            'body' => $request->note ?? 'تم الغاء طلب الاستعار من الفريق الاساسي',
            'link' => route('frontend.transfer-players.index'),
        ]);

        session()->flash('success_message', 'تم الغاء الطلب بنجاح');
        return to_route('frontend.transfer-players.index');
    }

    /**
     * Checkout
     *
     * @param TransferPlayer $transfer
     * @return RedirectResponse
     */
    public function checkoutTransfer(TransferPlayer $transfer): RedirectResponse
    {
        $products = [
            [
                "name" => "طلب نقل لاعب",
                "quantity" => 1,
                "unit_amount" => 25000,
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
                'type' => SuccessTransactionType::TransferRequest->value,
                'id' => $transfer->id,
                'transaction_id' => $transaction->id,
            ]),
            'cancel' => route('frontend.payments.cancel'),
        ];

        $payment = new PaymentService();
        $checkout = $payment->createSession($products, $customer, $urls);

        $transaction->session_id = $checkout->data->session_id;

        return redirect($payment->urlToCheckout($checkout->data->session_id));
    }
}
