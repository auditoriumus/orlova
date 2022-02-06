<?php

namespace App\Http\Services\SendEmailServices;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException as BadResponseExceptionAlias;
use Illuminate\Support\Facades\Log;

class SendEmailService extends EmailService
{
    public function sendResetPasswordLink($user, $token)
    {
        $headers = array(
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'X-API-KEY' => env('EMAIL_TOKEN'),
        );

        $client = new Client([
            'base_uri' => 'https://eu1.unione.io/ru/transactional/api/v1/'
        ]);

        $url = route('password.reset', $token) . '?email=' . $user->email;

        $requestBody = [
            "message" => [
                "recipients" => [
                    [
                        "email" => $user->email,
                    ]
                ],
                "body" => [
                    "html" => $this->template($user, $url),
                ],
                "subject" => "Восстановление пароля",
                "from_email" => "admin@orlova.pro",
                "from_name" => "Юлия Орлова",
                "track_links" => 0,
                "track_read" => 0,
            ]
        ];

        try {
            $response = $client->request('POST', 'email/send.json', array(
                    'headers' => $headers,
                    'json' => $requestBody,
                )
            );
            Log::alert($response->getBody()->getContents());
        } catch (BadResponseExceptionAlias $e) {
            Log::error('Ошибка отправки email: ' . $e->getMessage());
        }
    }

    private function template($user, $url)
    {
        return '<table class="body-wrap">
                      <tr>
                        <td>
                            <table>
                                <tr>
                                    <td class="content">
                                        <h2>Добрый день, ' . $user->name . '</h2>
                                        <p>Кто-то пытается сменить ваш пароль на сайте https://orlova.pro, если это не вы, проигнорируйте это письмо, в ином случае перейдите по ссылке:</a></p>
                                        <table>
                                            <tr>
                                                <td>
                                                    <p>
                                                        <a href="' . $url . '" class="button">Сбросить пароль</a>
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                        <p><em> С Уважением, Юлия Орлова </em></p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                      </tr>
                </table>';
    }
}
