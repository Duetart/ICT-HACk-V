<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <style type="text/css">
        @font-face {
            font-family: "ALS Gorizont Variable", "Golos Textt", "Golos-UI_VF", "Golos-Text_Black";
            src: url('{{ public_path('fonts/ALS Gorizont/ALS Gorizont Variable.ttf') }}');
            src: url('{{ public_path('fonts/Golos Textt-2/PT/PT/Golos-UI/Golos-UI_VF.ttf') }}');
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-black text-light" style="font-family: 'ALS Gorizont',serif;">
<div id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-black shadow-sm">
        <div class="container">
            <a class="navbar-brand h5" href="{{ url('/') }}">
                ICT.HACk-V
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse h5" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ (Request::route()->getName() == 'welcome') ? 'active' : '' }}"
                           aria-current="page" href="{{ route('welcome') }}">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (Request::route()->getName() == 'students') ? 'active' : '' }}"
                           aria-current="page" href="{{ route('students') }}">Студенты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (Request::route()->getName() == 'projects') ? 'active' : '' }}"
                           href="{{ route('projects') }}">Проекты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (Request::route()->getName() == 'burse') ? 'active' : '' }}"
                           href="{{ route('burse') }}">Биржа</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link h5" href="{{ route('login') }}">{{ __('Войти') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item ">
                                <a class="nav-link h5" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown ">
                            <a id="navbarDropdown bg-secondary h5" class="nav-link dropdown-toggle" href="#"
                               role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end bg-secondary link-dark"
                                 aria-labelledby="navbarDropdown">
                                <a class="dropdown-item bg-secondary text-dark link-light h6"
                                   href="{{ route('home') }}"> Профиль </a>
                                <a class="dropdown-item bg-secondary text-dark link-light h6 pb-0"
                                   href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Выйти
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        <main class="container">
            @yield('content')
        </main>
    </main>
    <floor>
    </floor>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>
