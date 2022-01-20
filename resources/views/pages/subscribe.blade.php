<!-- subscribe part here -->
<section class="subscribe_part section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="subscribe_part_content">
                    <h2>Получайте свежую информацию!</h2>
                    <p>Подпишитесь чтобы сразу узнавать о новых практиках</p>
                    <div class="subscribe_form">
                        <form action="{{route('subscribe')}}" method="post">
                            @csrf
                            <input type="email" name="email" placeholder="Введите свой email">
                            <button type="submit" class="btn_1">Подписаться</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subscribe part end -->
