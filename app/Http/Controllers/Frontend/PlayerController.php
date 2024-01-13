<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\PlayerApproveStatus;
use App\Enums\PlayerJoinStatus;
use App\Enums\PlayerYearStatus;
use App\Enums\SuccessTransactionType;
use App\Http\Controllers\Controller;
use App\Models\ClubNotefication;
use App\Models\Player;
use App\Models\Team;
use App\Models\Transaction;
use App\Services\PaymentService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Spatie\Browsershot\Browsershot;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::where('approve_status', PlayerApproveStatus::Approved->value)
            ->where('join_status', '!=', PlayerJoinStatus::Stoped)
            ->where('join_status', '!=', PlayerJoinStatus::UnJoin)
            ->where('year_status', PlayerYearStatus::Active)
            ->when(request('search'), function ($query) {
                return $query->where('name', 'like', '%' . request('search') . '%')
                    ->orWhere('card_id', 'like', '%' . request('search') . '%');
            })->where('team_id', team()->id)->with('team')
            ->paginate(12);

        return view('frontend.players.index', ['players' => $players]);
    }

    public function requestIndex()
    {
        return view('frontend.players.request-index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('frontend.players.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  Player  $player
     * @return View|RedirectResponse
     */
    public function show(Player $player): View|RedirectResponse
    {
        if ($player->team_id != team()->id) {
            session()->flash('error_message', 'عذرا لا يمكنك فتح هذه الصفحة');
            return redirect()->route('frontend.players.index');
        }

        return view('frontend.players.show', ['player' => $player]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Player  $player
     * @return View|RedirectResponse
     */
    public function destroy(Player $player): RedirectResponse
    {
        $team_slug = $player->team->slug;
        
        $player->delete();
        $player->forceDelete();

        session()->flash('success_message', 'تم حذف اللاعب بنجاح');

        return redirect()->route('frontend.players.index', $team_slug);
    }
    public function edit(Player $player): View|RedirectResponse
    {
        if ($player->team_id != team()->id) {
            session()->flash('error_message', 'عذرا غير مسموح لك بتنفيذ هذا الاجراء');
            return redirect()->route('frontend.players.index');
        }

        return view('frontend.players.edit', ['player' => $player]);
    }

    /**
     * Change Player State
     *
     * @param Player $player
     * @return RedirectResponse
     */
    public function sendToClub(Player $player): RedirectResponse
    {
        if ($player->team_id != team()->id) {
            session()->flash('error_message', 'عذرا غير مسموح لك بتنفيذ هذا الاجراء');
            return redirect()->route('frontend.players.index');
        }

        $player->approve_status = PlayerApproveStatus::SendToClub;
        $player->save();

        ClubNotefication::create([
            'club_id' => team()->club_id,
            'title' => "طلب تسجيل اللاعب : $player->name",
            'link' => route('dashboard.players.show', ['player' => $player->card_id]),
            'body' => "نرغب في تسجيل اللاعب : $player->name الرجاء مراجعة الطلب",
        ]);

        session()->flash('success_message', 'تم ارسال الطلب بنجاح');
        return redirect()->route('frontend.players.show', $player->card_id);
    }

    public function checkoutRegister(Player $player)
    {
        $products = [
            [
                "name" => "تسجيل لاعب جديد",
                "quantity" => 1,
                "unit_amount" => 3000,
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
                'type' => SuccessTransactionType::RegisterPlayer->value,
                'id' => $player->card_id,
                'transaction_id' => $transaction->id,
            ]),
            'cancel' => route('frontend.payments.cancel'),
        ];

        $payment = new PaymentService();
        $checkout = $payment->createSession($products, $customer, $urls);

        $transaction->session_id = $checkout->data->session_id;

        return redirect($payment->urlToCheckout($checkout->data->session_id));
    }

    public function pdf()
    {
        $team = Team::find(team()->id);
        $players = $team->players()
            ->where('approve_status', PlayerApproveStatus::Approved->value)
            ->where('join_status', '!=', PlayerJoinStatus::Stoped)
            ->where('join_status', '!=', PlayerJoinStatus::UnJoin)
            ->where('year_status', PlayerYearStatus::Active)
            ->get();

        return view('pdf.players', [
            'players' => $players,
            'team' => $team,
        ]);

        // $filePath = storage_path() . '/app/livewire-tmp/' . rand(111111111, 999999999) . '.pdf';

        // Browsershot::html($html)
        //     ->emulateMedia('screen')
        //     ->showBackground()
        //     ->margins(10, 10, 10, 10)
        //     ->format('A4')
        //     ->landscape()
        //     ->save($filePath);
    
        // return response()->make(file_get_contents($filePath), 200, [
        //     'Content-Type' => 'application/pdf',
        // ]);
    }
}
