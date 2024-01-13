<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class PaymentService
{
    /**
     * Auth payment key
     *
     * @var string
     */
    private string $key;

    /**
     * Base api url
     *
     * @var string
     */
    private string $url;

    /**
     * Checkout url
     *
     * @var string
     */
    private string $publishable_key;

    public function __construct()
    {
        $this->key = config('services.payment.key');
        $this->url = config('services.payment.url');
        $this->publishable_key = config('services.payment.publishable_key');
    }

    public function createSession(array $products, array $customer, array $urls)
    {
        $data = [
            "client_reference_id" => $customer['id'],
            "mode" => "payment",
            "products" => $products,
            "success_url" => $urls['success'],
            "cancel_url" => $urls['cancel'],
            "metadata" => [
                "Team Name" => $customer['name'],
            ],
        ];

        $client = new Client();

        $res = $client->request('POST', "$this->url/checkout/session", [
            'headers' => [
                'thawani-api-key' => $this->key,
                'Content-type' => 'application/json',
            ],
            'body' => json_encode($data),
        ]);

        return json_decode($res->getBody()->getContents());
    }

    public function urlToCheckout(string $sessionId)
    {
        return "https://checkout.thawani.om/pay/$sessionId?key=$this->publishable_key";
    }
}
