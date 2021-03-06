@extends('layout.app')

@section('title', 'Обо мне')

@section('content')
    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>Обо мне</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->
    <!-- product list part start-->
    <section class="about_us padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="about_us_content">
                        <h5>В двух словах</h5>
                        <p>Здравствуйте, друзья! Меня зовут Юлия Орлова. Я психолог, но не только. Ещё я человек, который точно знает и проверил на себе, как работает психологическая помощь.
                            В своей работе, в блоге и в курсах я преследую одну большую и красивую цель: сделать так, чтобы изменения, которые происходят в Вашей жизни, Вас питали, а не разрушали.
                            Общаясь с людьми на самые разные темы, я вижу одну вещь: от движения вперёд останавливает парализующий страх изменений. И в прошлом есть опыт, в котором изменения были невыносимыми.
                            Я точно знаю, что опыт может быть другим. И один из способов его таким сделать — это работа с психологом.
                            У меня есть травматичный опыт работы в крупной фирме, с прекрасным доходом и слезами каждое утро перед дверьми в офис.
                            У меня есть очень страшный опыт потери этой работы.
                            Есть опыт начала психологической практики и выхода в интернет-пространство в новой роли. (Я знаю, как это, когда задают вопрос: «Ты теперь психолог? Совсем делать нечего?»)
                            Есть опыт ведения групп, на которые приходило два человека. Спасибо им огромное!
                            Есть опыт запуска курса, снятого на телефон, в первую волну коронавируса.
                            А впереди ещё много сложного и интересного. И я знаю, как, приобретая новый опыт, становиться все более и более целостной.
                            Главное — быть всегда за себя. Нас этому не учили, но мы точно можем научиться этому сами.</p>
                            <video width="800" height="480" controls>
                                <source src="{{asset("assets/video/about.mp4")}}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product list part end-->
    @include('pages.subscribe')
@endsection
