<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\PlayerJoinStatus;
use App\Enums\PlayerYearStatus;
use App\Enums\SuccessTransactionType;
use App\Http\Controllers\Controller;
use App\Models\Player;
use App\Models\Transaction;
use App\Models\YearUpdate;
use App\Models\YearUpdateTeam;
use App\Services\PaymentService;
use Illuminate\Http\Request;

class YearUpdateController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return View
     */
    public function show()
    {
        return view('frontend.year-updates.show');
    }

    public function cancelPlayer(Player $player)
    {
        $player->join_status = PlayerJoinStatus::Stoped;
        $player->save();

        session()->flash('success_message', 'تم حذف اللاعب من التجديد السنوي');

        return to_route('frontend.year-updates.show');
    }
    
    public function checkout(YearUpdateTeam $yearUpdate)
    {
        $products = [
            [
                "name" => "التجديد السنوي",
                "quantity" => 1,
                "unit_amount" => (1000 * $yearUpdate->cost),
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
                'type' => SuccessTransactionType::YearUpdate->value,
                'id' => $yearUpdate->id,
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
