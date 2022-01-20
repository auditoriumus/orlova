@extends('layout.app')
@section('title', 'Контакты')

@section('content')
    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>Контакты</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

    <!-- ================ contact section start ================= -->
    <section class="contact-section section_padding">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Обратная связь</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="{{route('feedback')}}" method="post"
                          id="contactForm"
                          novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                              placeholder='Введите сообщение' required>{{old('message')}}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text" placeholder='Имя'
                                           value="@if(Auth::user()){{Auth::user()->name}}@endif{{old('name')}}" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email" placeholder='Email'
                                           value="@if(Auth::user()){{Auth::user()->email}}@endif{{old('email')}}" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text"
                                           value="{{old('subject')}}"
                                           placeholder='Тема' required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn_3 button-contactForm">Отправить сообщение</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-angle-right"></i></span>
                        <div class="media-body">
                            <h3>ИП ДЕТКОВСКАЯ ЮЛИЯ ВЛАДИМИРОВНА</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-angle-right"></i></span>
                        <div class="media-body">
                            <h3>ИНН</h3>
                            <p>781697531334</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-angle-right"></i></span>
                        <div class="media-body">
                            <h3>ОГРНИП</h3>
                            <p>321784700219052</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-angle-right"></i></span>
                        <div class="media-body">
                            <h3>ТЕЛЕФОН</h3>
                            <p>+7 (981) 162-93-69</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-angle-right"></i></span>
                        <div class="media-body">
                            <h3>EMAIL</h3>
                            <p>admin@orlova.pro</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
@endsection
