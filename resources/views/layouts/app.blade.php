<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ITLab Task') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/futuretech.css') }}" rel="stylesheet">
    <script src="{{ asset('js/futuretech.js') }}" defer></script>

</head>
<body>
    <div id="app">
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="site-container top-bar__inner">
                <p class="top-bar__text">
                    Subscribe to our Newsletter For New & latest Blogs and Resources
                    <a href="/newsletter" class="top-bar__arrow-link" aria-label="Go to newsletter signup">
                        <svg width="16" height="16" fill="var(--color-accent)" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 8h8M8 4l4 4-4 4" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </p>
            </div>
        </div>
        <header class="site-header">
            <div class="site-container header__inner">
                <a href="/" class="header__logo">
                    <svg width="32" height="32" fill="var(--color-accent)" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 0C7.163 0 0 7.163 0 16s7.163 16 16 16 16-7.163 16-16S24.837 0 16 0zm0 30C8.28 30 2 23.72 2 16S8.28 2 16 2s14 6.28 14 14-6.28 14-14 14z"/>
                        <path d="M11 11h10v10H11z"/>
                    </svg>
                    <span class="sr-only">FutureTech Home</span>
                </a>
                <button class="header__toggle" id="nav-toggle">☰</button>
                <nav class="header__nav">
                    <ul class="nav__list nav__primary">
                        <li class="nav__item"><a href="{{ url('/') }}" class="nav__link {{ request()->is('/') ? 'active' : '' }}">Головна</a></li>
                        @auth
                            <li class="nav__item"><a href="{{ url('/account') }}" class="nav__link {{ request()->is('account') ? 'active' : '' }}">Аккаунт</a></li>
                            <li class="nav__item"><a href="{{ url('/articles') }}" class="nav__link {{ request()->is('articles') ? 'active' : '' }}">Статті</a></li>
                        @endauth
                    </ul>
                    <ul class="nav__list nav__auth">
                        @guest
                            <li class="nav__item"><a class="btn btn--accent" href="{{ route('login') }}">{{ __('Вхід') }}</a></li>
                            @if (Route::has('register'))
                                <li class="nav__item"><a class="btn btn--accent" href="{{ route('register') }}">{{ __('Реєстрація') }}</a></li>
                            @endif
                        @else
                            <li class="nav__item dropdown">
                                <a id="navbarDropdown" class="nav__link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->nickname }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Вихід') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </nav>
                <a href="/contact" class="btn btn--accent">Contact Us</a>
            </div>
        </header>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="bg-dark text-white py-3 mt-4">
            <div class="container text-center">
                &copy; {{ date('Y') }} {{ config('app.name', 'Blog') }}
            </div>
        </footer>

    </div>

</body>
</html>
