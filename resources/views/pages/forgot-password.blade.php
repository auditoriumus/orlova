@extends('layout.app')

@section('content')
    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>Восстановление пароля</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

    <!--================login_part Area =================-->
    <section class="login_part section_padding ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>Еще не зарегистрированы?</h2>
                            <p>Пройдите быструю регистрацию чтобы получать своевременную и актуальную информацию</p>
                            <a href="{{route('register')}}" class="btn_3">Пройти регистрацию и получить подарок</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Пожалуйста, введите email</h3>
                            <form class="row contact_form" action="{{route('password.email')}}" method="post" novalidate="novalidate">
                                @csrf
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="email" name="email" value=""
                                           placeholder="Email" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <button type="submit" value="submit" class="btn_3">
                                        Восстановить
                                    </button>
                                    {{--                                    <a class="lost_pass" href="#">Забыли пароль?</a>--}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->
@endsection
