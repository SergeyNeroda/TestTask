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
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <script src="{{ asset('js/futuretech.js') }}" defer></script>
    <script src="{{ asset('js/navbar.js') }}" defer></script>
    <script src="{{ asset('js/theme.js') }}" defer></script>

</head>
<body>
    <div id="app">

        <!-- Header / Navbar -->
        <x-navbar />
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
                    <p class="footer-copy">© 2024 FutureTech. Усі права захищені.</p>
                </div>

            </div>

            <div class="site-footer__bottom container">
                <p class="footer-bottom__links">
                    <a href="/about">Про нас</a>
                    <span class="footer-separator">|</span>
                    <a href="/contact">Контакти</a>
                    <span class="footer-separator">|</span>
                    <a href="/support">Підтримка</a>
                    <span class="footer-separator">|</span>
                    <a href="/terms-and-conditions">Умови користування</a>
                    <span class="footer-separator">|</span>
                    <a href="/privacy-policy">Політика конфіденційності</a>
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
