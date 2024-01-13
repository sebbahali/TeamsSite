<?php

namespace App\Traits;

trait PushNotification
{
    public function sendNotification(array $data): void
    {
        $token = $this->device_token ?? null;
        $device_info = $this->deviceInfo($token);
        $device_type = isset($device_info->platform) ? $device_info->platform : null;
        if ($device_type == 'IOS') {
            $this->sendIOSNotification($data);
        } elseif ($device_type == 'ANDROID') {
            $this->sendAndroidNotification($data);
        }
    }

    protected function sendIOSNotification(array $data): void
    {
        $token = $this->device_token;
        $fcmUrl = 'https://fcm.googleapis.com/fcm/send';
        $extraNotificationData = [
            'notification_type' => $data['type'],
            'message_id' => $data['message_id'],
        ];
        $notification = [
            'title' => $data['title'],
            'body' => $data['body'],
            "icon" => "myicon",
            "sound" => 'enabled',
        ];
        $fcmNotification = [
            'to' => $token, //single token
            'notification' => $notification,
            'data' => $extraNotificationData
        ];
        $headers = [
            'Authorization: key=' . env('FIREBASE_SERVER_KEY'),
            'Content-Type: application/json',
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $fcmUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
        $result = curl_exec($ch);
//        json_encode($result);
        curl_close($ch);
    }

    protected function sendAndroidNotification(array $data): void
    {
        $token = $this->device_token;
        $fcmUrl = 'https://fcm.googleapis.com/fcm/send';
        $extraNotificationData = [
            'title' => $data['title'],
            'body' => $data['body'],
            'notification_type' => $data['type'],
            'message_id' => $data['message_id'],
            "sound" => 'enabled',
        ];
        $fcmNotification = [
            'to' => $token, //single token
            'data' => $extraNotificationData,
        ];
        $headers = [
            'Authorization: key=' . env('FIREBASE_SERVER_KEY'),
            'Content-Type: application/json',
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $fcmUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
        $result = curl_exec($ch);
        curl_close($ch);
    }

    protected function deviceInfo($token): mixed
    {
        $url = 'https://iid.googleapis.com/iid/info/' . $token . '?details=true';
        $headers = [
            'Authorization: key=' . env('FIREBASE_SERVER_KEY'),
            'Content-Type: application/json',
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = json_decode(curl_exec($ch));
        curl_close($ch);
        return $result;
    }
}
