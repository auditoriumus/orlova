<?php

namespace App\Listeners;

use App\Events\SendEmailByPaymentEvent;
use App\Http\Services\SendEmailServices\SendNewPaymentEmailServices;

class SendEmailByPaymentListener
{
    private string $html;

    public function __construct()
    {
        $this->html = 'Здравствуйте, мои дорогие!' . "\n" . 'Я очень рада, что в практику «Сила Подснежника» мы пойдём с Вами вместе. Вместе будем творить волшебство: видеть и соединять в себе силу и нежность. Отпускать боль. Омывать свое сердце и душу светлыми слезами. Вспоминать как звучит наш смех, как извивается тело в танце жизни. В каждый момент времени мы не состоим из чего-то одного. В нас много разного. И это разное мы будем отыскивать, питать, помогать ему тянуться к солнцу.Оно обязательно заметит и поможет нам растопить льды.Практика пройдёт на платформе ZOOM, Вам придет сообщение на почту с рабочей  ссылкой. Запись будет доступна двое суток. Так же, вступите, пожалуйста в закрытый телеграм канал, там будет проходить вся подготовка к практике, будут дублироваться ссылки и в случае технических проблем, там мы скооорденируемся быстрее. <a href="https://t.me/+UShkTsTVS_U3ZDM6">https://t.me/+UShkTsTVS_U3ZDM6</a>' . '<br>Встречаемся там, люблю вас.</br>';
    }

    public function handle(SendEmailByPaymentEvent $event)
    {
        app(SendNewPaymentEmailServices::class)->sendEmail($event->user, 'Сила Подснежника', $this->html);
    }
}
