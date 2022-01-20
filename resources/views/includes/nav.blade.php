<!--::header part start::-->
<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="/"> <img src="{{asset('assets/img/logo.png')}}" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('about')}}">Обо мне</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contact')}}">Контакты</a>
                            </li>
                            @auth()
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('home')}}">Приобретенные курсы</a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                    <div class="hearer_icon d-flex align-items-center">
                        @auth()
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <button class="genric-btn primary" type="submit">Выйти</button>
                            </form>
                        @endauth
                        @guest()
                            <a href="{{route('login')}}"><i class="ti-user"></i></a>
                        @endguest
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header part end-->
