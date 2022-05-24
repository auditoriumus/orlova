<?php

namespace App\Http\Services\SendEmailServices;

use App\Models\User;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException as BadResponseExceptionAlias;
use Illuminate\Support\Facades\Log;

class EmailService
{
    protected array $headers;
    protected Client $client;
    protected array $requestBody;

    public function __construct()
    {
        $this->headers = array(
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'X-API-KEY' => env('EMAIL_TOKEN'),
        );

        $this->client = new Client([
            'base_uri' => 'https://eu1.unione.io/ru/transactional/api/v1/'
        ]);
    }

    public function sendEmail(User $user, string $subject, string $html)
    {
        $requestBody = [
            "message" => [
                "recipients" => [
                    [
                        "email" => $user->email,
                    ]
                ],
                "body" => [
                    "html" => $html,
                ],
                "subject" => $subject,
                "from_email" => "admin@orlova.pro",
                "from_name" => "Юлия Орлова",
                "track_links" => 0,
                "track_read" => 0,
            ]
        ];

        try {
            $response = $this->client->request('POST', 'email/send.json', [
                    'headers' => $this->headers,
                    'json' => $requestBody,
                ]
            );
            Log::alert($response->getBody()->getContents());
        } catch (BadResponseExceptionAlias $e) {
            Log::error('Ошибка отправки email: ' . $e->getMessage());
        }
    }
}
