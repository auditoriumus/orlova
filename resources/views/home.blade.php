@extends('layout.app')

@section('title', 'Приобретенные курсы')

@section('content')
    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>Приобретенные курсы</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

    <!-- product list part start-->
    <section class="product_list section_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product_list">
                        @if(isset($userCourses))
                            @for($i=0; $i<count($userCourses); $i++)
                                <div class="row">
                                    <div class="offset-lg-3 col-lg-6 col-sm-6">
                                        <div class="single_product_item">
                                            <img src="{{$userCourses[$i]['img']}}" alt="#" class="img-fluid">
                                            <h3><a href="{{route('courses.show', $userCourses[$i]['uuid'])}}">{{$userCourses[$i]['title']}}</a></h3>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        @endif
                        <div class="load_more_btn text-center">
                            <a href="/#courses" class="btn_3">Смотреть все</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product list part end-->
    @include('pages.subscribe')
@endsection
