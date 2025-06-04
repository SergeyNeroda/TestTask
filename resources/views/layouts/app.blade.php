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
    <link href="{{ asset('css/featured-articles.css') }}" rel="stylesheet">
    <script src="{{ asset('js/futuretech.js') }}" defer></script>
    <script src="{{ asset('js/theme.js') }}" defer></script>

</head>
<body>
    <div id="app">
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="site-container top-bar__inner">
                <p class="top-bar__text">
                    Subscribe to our Newsletter For New &amp; latest Blogs and Resources
                    <a href="/newsletter" class="top-bar__arrow-link" aria-label="Go to newsletter signup">
                        <svg width="16" height="16" fill="var(--color-accent)" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 8h8M8 4l4 4-4 4" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </p>
            </div>
        </div>

        <!-- Header / Navbar -->
        <header class="site-header">
            <div class="site-container header__inner">
                <a href="/" class="header__logo" aria-label="FutureTech Home">
                    <svg width="32" height="32" fill="var(--color-accent)" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 0C7.163 0 0 7.163 0 16s7.163 16 16 16 16-7.163 16-16S24.837 0 16 0zm0 30C8.28 30 2 23.72 2 16S8.28 2 16 2s14 6.28 14 14-6.28 14-14 14z"/>
                        <path d="M11 11h10v10H11z"/>
                    </svg>
                    <span class="sr-only">FutureTech</span>
                </a>
                <button class="header__toggle" id="nav-toggle">☰</button>
                <button id="theme-toggle" class="theme-toggle" aria-label="Toggle theme">🌓</button>
                <nav class="header__nav">
                    <ul class="nav__list nav__primary">
                        <li class="nav__item"><a href="{{ url('/') }}" class="nav__link {{ request()->is('/') ? 'nav__link--active' : '' }}">Головна</a></li>
                        @auth
                            <li class="nav__item"><a href="{{ url('/account') }}" class="nav__link {{ request()->is('account') ? 'nav__link--active' : '' }}">Аккаунт</a></li>
                            <li class="nav__item"><a href="{{ url('/articles') }}" class="nav__link {{ request()->is('articles') ? 'nav__link--active' : '' }}">Статті</a></li>
                        @endauth
                    </ul>
                    <ul class="nav__list nav__auth">
                        @guest
                            <li class="nav__item"><a class="nav__link" href="{{ route('login') }}">{{ __('Вхід') }}</a></li>
                            @if (Route::has('register'))
                                <li class="nav__item"><a class="nav__link" href="{{ route('register') }}">{{ __('Реєстрація') }}</a></li>
                            @endif
                        @else
                            <li class="nav__item user-dropdown">
                                <button class="nav__link user-dropdown__toggle" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->nickname }}
                                </button>

                                <div class="user-dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a href="{{ route('logout') }}"
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
                <a href="{{ url('/contact') }}" class="btn btn--accent {{ request()->is('contact') ? 'nav__link--active' : '' }}">Contact Us</a>
            </div>
        </header>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="site-footer">
            <div class="site-footer__inner container">
                <div class="footer-col footer-col--branding">
                    <svg class="footer-logo" width="48" height="48" fill="var(--color-accent)" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 0C7.163 0 0 7.163 0 16s7.163 16 16 16 16-7.163 16-16S24.837 0 16 0zm0 30C8.28 30 2 23.72 2 16S8.28 2 16 2s14 6.28 14 14-6.28 14-14 14z"/>
                        <path d="M11 11h10v10H11z"/>
                    </svg>
                    <p class="footer-copy">© 2024 FutureTech. All rights reserved.</p>
                </div>

                <div class="footer-col footer-col--links">
                    <p class="footer-col__heading">Home</p>
                    <ul class="footer-list">
                        <li><a href="/features">Features</a></li>
                        <li><a href="/blogs">Blogs</a></li>
                        <li><a href="/resources">Resources <span class="badge">New</span></a></li>
                        <li><a href="/testimonials">Testimonials</a></li>
                        <li><a href="/contact-us">Contact Us</a></li>
                        <li><a href="/newsletter">Newsletter</a></li>
                    </ul>
                </div>

                <div class="footer-col footer-col--links">
                    <p class="footer-col__heading">News</p>
                    <ul class="footer-list">
                        <li><a href="/news/trending">Trending Stories</a></li>
                        <li><a href="/news/featured-videos">Featured Videos</a></li>
                        <li><a href="/news/technology">Technology</a></li>
                        <li><a href="/news/health">Health</a></li>
                        <li><a href="/news/politics">Politics</a></li>
                        <li><a href="/news/environment">Environment</a></li>
                    </ul>
                </div>

                <div class="footer-col footer-col--links">
                    <p class="footer-col__heading">Blogs</p>
                    <ul class="footer-list">
                        <li><a href="/blogs/quantum-computing">Quantum Computing</a></li>
                        <li><a href="/blogs/ai-ethics">AI Ethics</a></li>
                        <li><a href="/blogs/space-exploration">Space Exploration</a></li>
                        <li><a href="/blogs/biotechnology">Biotechnology <span class="badge">New</span></a></li>
                        <li><a href="/blogs/renewable-energy">Renewable Energy</a></li>
                        <li><a href="/blogs/biohacking">Biohacking</a></li>
                    </ul>
                </div>

                <div class="footer-col footer-col--links">
                    <p class="footer-col__heading">Podcasts</p>
                    <ul class="footer-list">
                        <li><a href="/podcasts/ai-revolution">AI Revolution</a></li>
                        <li><a href="/podcasts/ail-talk-ai">TechTalk AI <span class="badge">New</span></a></li>
                        <li><a href="/podcasts/ai-conversations">AI Conversations</a></li>
                    </ul>
                </div>

                <div class="footer-col footer-col--links">
                    <p class="footer-col__heading">Resources</p>
                    <ul class="footer-list">
                        <li><a href="/resources/whitepapers">Whitepapers <span class="icon-link">→</span></a></li>
                        <li><a href="/resources/ebooks">Ebooks <span class="icon-link">→</span></a></li>
                        <li><a href="/resources/reports">Reports <span class="icon-link">→</span></a></li>
                        <li><a href="/resources/research-papers">Research Papers <span class="icon-link">→</span></a></li>
                    </ul>
                </div>
            </div>

            <div class="site-footer__bottom container">
                <p class="footer-bottom__links">
                    <a href="/terms-and-conditions">Terms &amp; Conditions</a>
                    <span class="footer-separator">|</span>
                    <a href="/privacy-policy">Privacy Policy</a>
                </p>
                <div class="footer-social">
                    <a href="https://twitter.com/futuretech" class="social-link" aria-label="Twitter">🐦</a>
                    <a href="https://medium.com/@futuretech" class="social-link" aria-label="Medium">✍️</a>
                    <a href="https://linkedin.com/company/futuretech" class="social-link" aria-label="LinkedIn">💼</a>
                </div>
            </div>
        </footer>

    </div>

</body>
</html>
