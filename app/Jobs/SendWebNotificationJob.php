<?php

namespace App\Jobs;

use Exception;
use GuzzleHttp\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendWebNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $fcmToken;

    private $title;

    private $body;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($fcmToken, $title, $body)
    {
        $this->fcmToken = $fcmToken;
        $this->title = $title;
        $this->body = $body;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $url = 'https://fcm.googleapis.com/fcm/send';

        $serverKey = env('FIREBASE_SERVER_TOKEN');

        $data = [
            "registration_ids" => $this->fcmToken,
            "notification" => [
                "title" => $this->title,
                "body" => $this->body,
            ]
        ];

        $encodedData = json_encode($data);

        $headers = [
            'Authorization' => 'key=' . $serverKey,
            'Content-Type'  => 'application/json',
        ];

        $client = new Client();

        try {
            $request = $client->post($url, [
                'headers' => $headers,
                "body" => $encodedData,
            ]);

            $response = $request->getBody();
            return $response;
        } catch (Exception $e) {
            return $e;
        }
    }
}
