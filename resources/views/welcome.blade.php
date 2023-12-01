@extends('layout.app')

@section('content')
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>Юлия Орлова</h1>
                            <p>Психология нежных отношений с собой и зрелых с жизнью</p>
                            @if(!Auth::check())
                                <a href="{{route('login')}}" class="btn_1">Получить лекцию в подарок</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner_img">
            <img src="{{asset('assets/img/banner.png')}}" alt="banner" class="img-fluid">
            <img src="{{asset('assets/img/banner_pattern.png')}} " alt="banner" class="pattern_img img-fluid">
        </div>
    </section>
    <!-- banner part start-->

    <!-- product list start-->
    @if(isset($courses))
        <section class="single_product_list" id="courses">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single_product_iner">
                            @for($i=0; $i<count($courses); $i++)
                                <div class="row align-items-center justify-content-between @if($i%2==0) reverse @endif">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_product_img">
                                            <img src="{{asset($courses[$i]['img'])}}" class="img-fluid"
                                                 alt="#">
                                            <img src="{{asset('assets/img/product_overlay.png')}}" alt="#"
                                                 class="product_overlay img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-sm-6">
                                        <div class="single_product_content">
                                            <h5>{{$courses[$i]['type']}}</h5>
                                            <h2>
                                                <a href="{{route('courses.show',$courses[$i]['uuid'])}}">{{$courses[$i]['title']}}</a>
                                            </h2>
                                            <a href="{{route('courses.show',$courses[$i]['uuid'])}}"
                                               class="btn_3">Смотреть</a>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- product list end-->

    <!-- feature part here -->
    {{--    <section class="feature_part section_padding">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row justify-content-between">--}}
    {{--                <div class="col-lg-6">--}}
    {{--                    <div class="feature_part_tittle">--}}
    {{--                        <h3>Порядок оказания услуг.</h3>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-5">--}}
    {{--                    <div class="feature_part_content">--}}
    {{--                        <p>Чтобы вам было максимально удобно, я стараюсь оказывать полную поддержку своих--}}
    {{--                            клиентов на всех этапах.</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="row justify-content-center">--}}
    {{--                <div class="col-lg-3 col-sm-6">--}}
    {{--                    <div class="single_feature_part">--}}
    {{--                        <img src="{{asset('assets/img/icon/feature_icon_2.svg')}}" alt="#">--}}
    {{--                        <h4>Онлайн консультация со мной</h4>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-3 col-sm-6">--}}
    {{--                    <div class="single_feature_part">--}}
    {{--                        <img src="{{asset('assets/img/icon/feature_icon_3.svg')}}" alt="#">--}}
    {{--                        <h4>Выбор подходящей программы</h4>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-3 col-sm-6">--}}
    {{--                    <div class="single_feature_part">--}}
    {{--                        <img src="{{asset('assets/img/icon/feature_icon_1.svg')}}" alt="#">--}}
    {{--                        <h4>Возможность оплаты картой</h4>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-3 col-sm-6">--}}
    {{--                    <div class="single_feature_part">--}}
    {{--                        <img src="{{asset('assets/img/icon/feature_icon_4.svg')}}" alt="#">--}}
    {{--                        <h4>Бонусы и подарки клиентам</h4>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    <section class="feature_part section_padding">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12">
                    <h3>По вопросам приобретения продуктов и участия в мероприятиях обращаться в Телеграм: <a
                            href="https://t.me/Kseniyazabota">@Kseniyazabota</a></h3>
                </div>
            </div>
        </div>
    </section>
    <!-- feature part end -->
    @include('pages.subscribe')
@endsection
