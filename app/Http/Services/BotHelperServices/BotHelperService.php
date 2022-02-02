<?php

namespace App\Http\Services\BotHelperServices;

use Telegram\Bot\Api;

class BotHelperService
{
    protected $telegram;

    public function __construct()
    {
        $this->telegram = new Api(env('TG_TOKEN'));
    }
}
