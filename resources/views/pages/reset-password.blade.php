@extends('layout.app')

@section('content')
    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>Сброс пароля</h2>
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
                            <h3>Пожалуйста, введите и продублируйте пароль</h3>
                            <form class="row contact_form" action="{{route('password.update')}}" method="post" novalidate="novalidate">
                                @csrf
                                <div class="col-md-12 form-group p_star">
                                    <input type="email" class="form-control" hidden id="email" name="email" value="{{request('email')}}"
                                           placeholder="Email" required>
                                    <input type="tel" class="form-control" hidden id="token" name="token" value="{{Route::input('token')}}"
                                           placeholder="token" required>
                                    <input type="password" class="form-control" id="password" name="password" value=""
                                           placeholder="Пароль" required>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value=""
                                           placeholder="Подтвердите" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <button type="submit" value="submit" class="btn_3">
                                        Восстановить
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
