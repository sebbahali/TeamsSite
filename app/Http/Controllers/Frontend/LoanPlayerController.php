<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\LoanStatus;
use App\Enums\PlayerApproveStatus;
use App\Enums\SuccessTransactionType;
use App\Http\Controllers\Controller;
use App\Models\ClubNotefication;
use App\Models\LoanPlayer;
use App\Models\Player;
use App\Models\TeamNotefication;
use App\Models\Transaction;
use App\Services\PaymentService;
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
        $searchPlayers = [];

        if (request('search') != null) {
            $searchPlayers = Player::where('team_id', '!=', team()->id)
                ->where('approve_status', PlayerApproveStatus::Approved)
                ->where('card_id', request('search'))
                ->get();
        }

        return view('frontend.loan-players.index', ['searchPlayers' => $searchPlayers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Player $player
     * @return View
     */
    public function create(Player $player): View
    {
        return view('frontend.loan-players.create', ['player' => $player]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Player $player
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function store(Player $player, Request $request): RedirectResponse
    {
        $request->validate([
            'start' => ['required', 'date'],
            'end' => ['required', 'date'],
            'note' => ['required', 'string'],
            'terms' => ['required', 'accepted'],
        ]);

        $loan = LoanPlayer::create([
            'start' => $request->start,
            'end' => $request->end,
            'note' => $request->note,
            'basic_team_id' => $player->team_id,
            'send_team_id' => team()->id,
            'player_id' => $player->card_id,
            'status' => LoanStatus::SendToBasicTeam,
        ]);

        TeamNotefication::create([
            'team_id' => $loan->basic_team_id,
            'title' => 'طلب استعارة جديد',
            'body' => 'لديك طلب استعارة جديد الرجاء مراجعه',
            'link' => route('frontend.loan-players.show', $loan->id),
        ]);

        session()->flash('success_message', 'تم ارسال طلب الاعارة بنجاح');

        return to_route('frontend.loan-players.show', $loan->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  LoanPlayer  $loan
     * @return View
     */
    public function show(LoanPlayer $loanPlayer): View
    {
        return view('frontend.loan-players.show', ['loan' => $loanPlayer]);
    }

    /**
     * Basic Team Approve
     *
     * @param LoanPlayer $loan
     * @return RedirectResponse
     */
    public function basicApprove(LoanPlayer $loan): RedirectResponse
    {
        if ($loan->basic_team_id != team()->id) {
            session()->flash('success_message', 'ليس لديك صلاحيات لعرض هذه الصفحة');

            return back();
        }

        $loan->status = LoanStatus::BasicTeamApprov;
        $loan->save();

        ClubNotefication::create([
            'club_id' => team()->club_id,
            'title' => 'طلب استعارة جديد',
            'body' => 'طلب استعارة جديد الرجاء مراجعته',
            'link' => route('dashboard.loan-players.show', $loan->id),
        ]);

        TeamNotefication::create([
            'team_id' => $loan->send_team_id,
            'title' => 'وافق الفريق الاساسي على طلب الاستعارة',
            'body' => 'لقد وافق الفريق الاساسي على طلب الاستعارة في انتظار موافقة النادي',
            'link' => route('frontend.loan-players.show', $loan->id),
        ]);

        session()->flash('success_message', 'تم الموافقة على الطلب بنجاح');
        return to_route('frontend.loan-players.show', $loan->id);
    }

    /**
     * Basic Team Cancel
     *
     * @param LoanPlayer $loan
     * @param Request $request
     * @return RedirectResponse
     */
    public function basicCancel(LoanPlayer $loan, Request $request): RedirectResponse
    {
        if ($loan->basic_team_id != team()->id) {
            session()->flash('success_message', 'ليس لديك صلاحيات لعرض هذه الصفحة');

            return back();
        }

        $loan->delete();

        TeamNotefication::create([
            'team_id' => $loan->send_team_id,
            'title' => 'تم الغاء طلب الاستعارة',
            'body' => $request->note ?? 'تم الغاء طلب الاستعار من الفريق الاساسي',
            'link' => route('frontend.loan-players.index'),
        ]);

        session()->flash('success_message', 'تم الغاء الطلب بنجاح');
        return to_route('frontend.loan-players.index');
    }

    /**
     * Checkout
     *
     * @param LoanPlayer $loan
     * @return RedirectResponse
     */
    public function checkoutLoan(LoanPlayer $loan): RedirectResponse
    {
        $products = [
            [
                "name" => "طلب استعارة لاعب",
                "quantity" => 1,
                "unit_amount" => 250000,
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
                'type' => SuccessTransactionType::LoanRequest->value,
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
}
