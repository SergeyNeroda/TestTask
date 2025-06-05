<nav class="navbar">
    <div class="navbar__left">
        <button class="navbar__toggle" id="nav-toggle" aria-label="Перемкнути меню">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 6h18M3 12h18M3 18h18" />
            </svg>
        </button>
        <x-logo />
    </div>
    <ul class="navbar__center" id="nav-menu">
        <x-nav-item href="/" :active="request()->is('/')">Головна</x-nav-item>
        @auth
            <x-nav-item href="/articles" :active="request()->is('articles')">Статті</x-nav-item>
            <x-nav-item href="/account" :active="request()->is('account')">Аккаунт</x-nav-item>
        @endauth
    </ul>
    <div class="navbar__right">
        <x-theme-toggle />
        @auth
            <x-user-dropdown :name="Auth::user()->nickname" />
        @else
            <a href="{{ route('login') }}" class="nav-link">Вхід</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="nav-link">Реєстрація</a>
            @endif
        @endauth
        <a href="{{ url('/contact') }}" class="btn btn-primary">Зв'язатися з нами</a>
    </div>
</nav>
