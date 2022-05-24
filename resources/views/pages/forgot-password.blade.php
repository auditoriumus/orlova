@extends('layout.app')

@section('content')
    <!--================login_part Area =================-->
    <section class="section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            @if(\Illuminate\Support\Facades\Session::has('status'))
                                <h3>
                                    {{\Illuminate\Support\Facades\Session::get('status')}}
                                </h3>
                                <div class="row contact_form pt-5 pb-5">
                                    <p>Выполните инструкции из отправленного письма.</p>
                                </div>
                            @else
                                <h3>Пожалуйста, введите email</h3>
                                <form class="row contact_form" action="{{route('password.email')}}" method="post"
                                      novalidate="novalidate">
                                    @csrf
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="email" name="email"
                                               value="{{old('email')}}"
                                               placeholder="Email" required>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <button type="submit" value="submit" class="btn_3">
                                            Восстановить
                                        </button>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->
@endsection
