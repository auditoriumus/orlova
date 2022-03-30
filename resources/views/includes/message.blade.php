@if(isset($message))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{$message}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
@endif
@if(\Illuminate\Support\Facades\Session::has('status'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{\Illuminate\Support\Facades\Session::get('status')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
{{--<div class="alert alert-success alert-dismissible fade show" role="alert">--}}
{{--    Уважаемые пользователи, ведутся работы, при обнаружении проблем со входом, воспользуйтесь восстановлением пароля. При обнаружении других проблем, свяжитесь с нами любым способом, указанным в разделе "Контакты".--}}
{{--</div>--}}
