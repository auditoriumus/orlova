<?php

namespace App\Http\Services\BotHelperServices;

class SendMessageService extends BotHelperService
{
    public function sendByChatId($chatId, $message)
    {
        $this->telegram->sendMessage([
            'chat_id' => $chatId,
            'text' => $message
        ]);
    }
}
