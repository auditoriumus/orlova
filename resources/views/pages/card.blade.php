@extends('layout.app')

@section('content')
    <!-- breadcrumb part start-->
    <section class="breadcrumb_part single_product_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

    @php($options = json_decode($course->options, true))
    <!--================Single Product Area =================-->
    <div class="product_image_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="single_product_img">
                        <img src="{{asset($course->detail_img)}}" alt="#" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="single_product_text text-center">
                        <h3>{{$course->title}}</h3>
                        <p class="text-left">{!! $course->description!!}</p>
                        @if(\Illuminate\Support\Facades\Auth::check() && isset($available) && $available == true)
                            @if($options['parts'] == 1)
                                @if(isset($videos))
                                    @foreach($videos as $video)
                                        @if($video->part == 1)
                                            <div class="about_us_video">
                                                @if(preg_match('#youtube#', $video->source))
                                                    <iframe width="754" height="480" src="{{$video->source}}"
                                                            title="YouTube video player" frameborder="0"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                            allowfullscreen></iframe>
                                                @else
                                                    <video width="800" height="480" controls>
                                                        <source src="{{$video->source}}" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                @endif
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            @else
                                <div class="accordion" id="accordionExample">
                                    @for($i = 1; $i <= $options['parts']; $i++)
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseOne-{{$i}}" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                    Часть {{$i}}
                                                </button>
                                            </h2>
                                            <div id="collapseOne-{{$i}}" class="accordion-collapse collapse show"
                                                 aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    @foreach($videos as $video)
                                                        @if($video->part == $i)
                                                            <div class="about_us_video">
                                                                @if(preg_match('#youtube#', $video->source))
                                                                    <iframe width="754" height="480"
                                                                            src="{{$video->source}}"
                                                                            title="YouTube video player" frameborder="0"
                                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                                            allowfullscreen></iframe>
                                                                @else
                                                                    <video width="800" height="480" controls>
                                                                        <source src="{{$video->source}}"
                                                                                type="video/mp4">
                                                                        Your browser does not support the video tag.
                                                                    </video>
                                                                @endif
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            @endif
                        @else
                            <form action="{{ route('order') }}" method="post">
                                @csrf
                                <div class="card_area">
                                    <div class="product_count_area">
                                        <p>{{ $course->price }} руб.</p>
                                    </div>
                                    <input type="number" name="price" hidden value="{{$course->price}}">
                                    <input type="text" name="course_id" hidden value="{{$course->uuid}}">
                                    <input type="text" name="description" hidden
                                           value="Оплата за практику: {{$course->title}}">
                                    <div class="mt-10">
                                        <input type="text" name="email" placeholder="Email*" required
                                               class="single-input"
                                               @if(Auth::check()) value="{{\Illuminate\Support\Facades\Auth::user()->email}}" @endif>
                                    </div>
                                    <div class="mt-10">
                                        <input type="text" name="phone" placeholder="Телефон*" required
                                               class="single-input"
                                               @if(Auth::check()) value="{{\Illuminate\Support\Facades\Auth::user()->phone}}" @endif>
                                    </div>
                                    <div class="mt-10">
                                        <input type="text" name="name" placeholder="Имя" required class="single-input"
                                               @if(Auth::check()) value="{{\Illuminate\Support\Facades\Auth::user()->name}}" @endif >
                                    </div>
                                    <div class="mt-10">
                                        <input type="text" name="promo_code" placeholder="Промо-код" class="single-input">
                                    </div>
                                    <div class="mt-10 left">
                                        <input type="checkbox" id="public_offer" name="public_offer" required>
                                        <label for="public_offer">Подтверждаю согласие с <a
                                                href="{{route('public-offer')}}">Договором публичной оферты</a></label>
                                    </div>
                                    <div class="mt-10">
                                        <input type="checkbox" id="privacy_policy" name="privacy_policy" required>
                                        <label for="privacy_policy">Подтверждаю согласие на обработку <a
                                                href="{{route('privacy')}}">персональных данных</a></label>
                                    </div>
                                    <div class="mt-10">
                                        <button type="submit" class="btn_3">купить</button>
                                    </div>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Single Product Area =================-->
    @include('pages.subscribe')
@endsection
