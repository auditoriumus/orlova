<?php

namespace App\Listeners;

use App\Events\NewFeedback;
use App\Http\Services\BotHelperServices\SendMessageService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendMessageToTgBot
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\NewFeedback  $event
     * @return void
     */
    public function handle(NewFeedback $event)
    {

        app(SendMessageService::class)->sendByChatId(738833121, 'Новое сообщение с сайта orlova.pro:');
        app(SendMessageService::class)->sendByChatId(738833121, 'От: ' . $event->feedback->name . ' ( ' . $event->feedback->email . ' )');
        app(SendMessageService::class)->sendByChatId(738833121, 'Тема: ' . $event->feedback->subject);
        app(SendMessageService::class)->sendByChatId(738833121, 'Текст: ' . $event->feedback->message);
    }
}
