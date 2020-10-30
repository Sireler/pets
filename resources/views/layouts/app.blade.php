<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

    <!-- Fonts -->
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

    <!-- Styles -->
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body style="background-color: #d0d0d0;">
    <div id="app" class="container" style="background-color: #ffffff">

        {{-- header menu --}}
        <nav>
            <!-- header верхняя строка -->
            <div class="container">
                <div class="row justify-content-between pt-1">
                    <div class="col-auto" style="color: #cc2222; ">
                        <strong>mos.ru</strong>
                        <b class="font-weight-normal"> База животных без владельцев</b>
                    </div>
                    @guest
                        <div class="col-auto">
                            <a class="btn-link-mos" href="{{ route('login') }}">Войти</a>
                        </div>
                    @else
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Выйти') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    @endguest
                </div>

            </div>
            <!-- header верхняя строка конец -->

            <div class="container">
                <!-- header меню -->
                <div class="row pb-2 pt-4 border-bottom">
                    <div class="col-auto">
                        <a class="btn-link-mos" href="{{ url('/') }}">
                            Главная
                        </a>
                    </div>
                    <div class="col-auto">
                        <a class="btn-link-mos" href="#">
                            <ul class="nav">
                                <li class="dropdown">
                                    <a href="#" class=" btn-link-mos" data-toggle="dropdown">Каталог</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="btn-link-mos" href="#">Собаки</a></li>
                                        <li><a class="btn-link-mos" href="#">Кошки</a></li>
                                        <li><a class="btn-link-mos" href="#">Котята</a></li>
                                        <li><a class="btn-link-mos" href="#">Щенки</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </a>
                    </div>
                </div>
                <!-- Конец header меню -->
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        @include('layouts.footer')

    </div>
    <script src="https://kit.fontawesome.com/2b23cb2047.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
