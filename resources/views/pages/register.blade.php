@extends('layout.app')

@section('content')
    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>Регистрация</h2>
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
                <div class="col-lg-12 col-md-12">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Заполните все поля<br></h3>
                            <form class="row contact_form" action="{{route('register')}}" method="post" novalidate="novalidate">
                                @csrf
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}"
                                           placeholder="Имя" required>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control tel" id="phone" name="phone" value="{{old('phone')}}"
                                           placeholder="Телефон" required>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}"
                                           placeholder="Email" required>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}"
                                           placeholder="Пароль" required>
                                </div>
                                <div class="col-md-12 form-group p_star creat_account d-flex align-items-center">
                                    <input type="checkbox" id="public_offer" name="public_offer" required>
                                    <label for="public_offer">Подтверждаю согласие с <a href="{{route('public-offer')}}">Договором публичной оферты</a></label>
                                </div>
                                <div class="col-md-12 form-group p_star creat_account d-flex align-items-center">
                                    <input type="checkbox" id="privacy_policy" name="privacy_policy" required>
                                    <label for="privacy_policy">Подтверждаю согласие на обработку <a href="{{route('privacy')}}">персональных данных</a></label>
                                </div>
                                <div class="col-md-12 form-group">
                                    <button type="submit" value="submit" class="btn_3">
                                        Зарегистрироваться
                                    </button>
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
