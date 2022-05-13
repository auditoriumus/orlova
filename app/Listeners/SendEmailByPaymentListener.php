<?php

namespace App\Listeners;

use App\Events\SendEmailByPaymentEvent;
use App\Http\Services\SendEmailServices\SendNewPaymentEmailServices;
use Illuminate\Support\Facades\Log;

class SendEmailByPaymentListener
{
    private string $html;
    private string $subject;


    public function handle(SendEmailByPaymentEvent $event)
    {
        if ($event->courseId == 6) {
            $this->subject = 'Блоготерапия';
            $this->html = 'Здравствуйте, мои дорогие!' . "<br>" . 'Нас ждёт удивительный разговор. О звучании, проявленности и воплощении себя в жизни.  Так как вы себя воплощаете: в текстах, блогах, фотоснимках. В встречах, семинарах и группах, которые вы проводите.' . "<br>" . 'В спектаклях, которые вы ставите или только хотите.' . "<br>" . '... и в разговорах. С близкими. С учениками и учителями. Любимыми. С детьми. Мужчинами и женщинами.' . "<br>" . 'Мы воплощаем себя во всем: нет мелкого. Нет незначительного. Все важно.' . "<br>" . 'Мы будем говорить где потерялось это наше знание о том, что то, что мы несём в мир — огромная, великая ценность. Иначе не было бы нас.' . "<br>" . 'О том, как безопасно, не калеча свою душу насилием, возвращать себе себя.' . "<br>" . 'Наш разговор состоится 13 мая в 20:00 и будет продолжаться два часа.' . "<br>" . 'Ссылка придёт вам на почту, но есть ещё кое-что: наш чат.' . '<a href="https://t.me/+jdeTGc1L8Zo0Mjcy">https://t.me/+jdeTGc1L8Zo0Mjcy</a>' . "<br>" . 'Для тех, кому важна и интересна эта тема.' . "<br>" . 'Чат — это наш процесс создания пространства. Там мы говорим, делимся, задаём вопросы. В чате нет плана. Там только любовь, порыв и спонтанность, никакой обязаловки и никаких марафонских забегов. Все по желанию и любви.' . "<br>" . 'Сама встреча пройдёт в ZOOM. Ссылка так же придёт на почту и будет в чате. Запись останется в доступе на две недели.' . "<br>" . '<br>Я уже жду Вас в чате.) Встречаемся там</br>';
        } elseif ($event->courseId == 7) {
            $this->subject = 'Внутренний огонь';
            $this->html = 'Добро пожаловать на практику, «Внутренний огонь», мои хорошие!' . '<br>' . 'Вместе мы будем греть себя и Мир! Целовать языками пламени небо и звезды.' . '<br>' . 'И учиться у звёзд сиянию. Быть искоркой, которая не тухнет. Искрой, которая разжигает любовь, надежду и даёт силы.' . '<br>' . 'Вся подготовка к практике, а так же создание поля будет в нашем чате, присоединяйтесь скорее:' . '<br>' . '<a href="https://t.me/+Cd3qM0up4CQyNGEy">https://t.me/+Cd3qM0up4CQyNGEy</a>';
        } elseif ($event->courseId == 8) {
            $this->subject = 'Десять писем';
            $this->html = 'Здравствуйте! Я очень рада приветствовать Вас на нашей трансформационной мастерской!' . '<br>' . 'Нас ждёт интересное путешествие с массой удивительных открытий. Мы будем учиться доверять себе, видеть свою красоту и делиться ей с важными людьми: друзьями или читателями (они ведь очень важны для каждого автора).' . '<br>' . 'Давайте позаботимся о том, чтобы пространство, в котором мы работаем было целительным для нас, и самое главное в этом — безопасность. Пожалуйста, давайте будем тактичны и нежны друг с другом. Давайте откажемся от любой критики и оценки и напитаем друг друга огромным количеством поддержки. Эта атмосфера точно перенесется в ваши блоги и люди начнут там доверять и раскрываться. А это — настоящее волшебство.' . '<br>' . 'Присоединяйтесь к нашему чата, там уже скоро начнётся магия. Мы увидим себя иными. Взрослыми. Смелыми. Любящими. Согревающими. Я вас там очень жду:' . '<br>' . '<a href="https://t.me/+enh4DGCtpX40NWMy">https://t.me/+enh4DGCtpX40NWMy</a>';
        }
        app(SendNewPaymentEmailServices::class)->sendEmail($event->user, $this->subject, $this->html);
    }
}
