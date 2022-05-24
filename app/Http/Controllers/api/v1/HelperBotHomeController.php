<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Telegram\Bot\Api;

class HelperBotHomeController extends Controller
{
    public function index(Request $request)
    {
        $chatId = $request->input('message')['chat']['id'];
        $telegram = new Api(env('TG_TOKEN'));

        $response = $telegram->sendMessage([
            'chat_id' => $chatId,
            'text' => $chatId
        ]);

        $messageId = $response->getMessageId();
    }
}
