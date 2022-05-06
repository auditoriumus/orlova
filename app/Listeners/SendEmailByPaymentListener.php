<?php

namespace App\Listeners;

use App\Events\SendEmailByPaymentEvent;
use App\Http\Services\SendEmailServices\SendNewPaymentEmailServices;

class SendEmailByPaymentListener
{
    private string $html;

    public function __construct()
    {
        $this->html = 'Здравствуйте, мои дорогие!' . "\n" . 'Нас ждёт удивительный разговор. О звучании, проявленности и воплощении себя в жизни.  Так как вы себя воплощаете: в текстах, блогах, фотоснимках. В встречах, семинарах и группах, которые вы проводите.' . "\n" . 'В спектаклях, которые вы ставите или только хотите.' . "\n" . '... и в разговорах. С близкими. С учениками и учителями. Любимыми. С детьми. Мужчинами и женщинами.' . "\n" . 'Мы воплощаем себя во всем: нет мелкого. Нет незначительного. Все важно.' . "\n" . 'Мы будем говорить где потерялось это наше знание о том, что то, что мы несём в мир — огромная, великая ценность. Иначе не было бы нас.' . "\n" . 'О том, как безопасно, не калеча свою душу насилием, возвращать себе себя.' . "\n" . 'Наш разговор состоится 13 мая в 20:00 и будет продолжаться два часа.' . "\n" . 'Ссылка придёт вам на почту, но есть ещё кое-что: наш чат.' . '<a href="https://t.me/+jdeTGc1L8Zo0Mjcy">https://t.me/+jdeTGc1L8Zo0Mjcy</a>' . "\n" . 'Для тех, кому важна и интересна эта тема.' . "\n" . 'Чат — это наш процесс создания пространства. Там мы говорим, делимся, задаём вопросы. В чате нет плана. Там только любовь, порыв и спонтанность, никакой обязаловки и никаких марафонских забегов. Все по желанию и любви.' . "\n" . 'Сама встреча пройдёт в ZOOM. Ссылка так же придёт на почту и будет в чате. Запись останется в доступе на две недели.' . "\n" . '<br>Я уже жду Вас в чате.) Встречаемся там</br>';
    }

    public function handle(SendEmailByPaymentEvent $event)
    {
        app(SendNewPaymentEmailServices::class)->sendEmail($event->user, 'Блоготерапия', $this->html);
    }
}
