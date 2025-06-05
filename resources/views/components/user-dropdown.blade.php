@props(['name'])
<div class="user-dropdown" id="user-dropdown">
    <button id="user-menu-toggle" class="user-dropdown__toggle" aria-haspopup="true" aria-expanded="false">
        <svg class="user-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975" />
            <path d="M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
        </svg>
        <span>{{ $name }}</span>
    </button>
    <div class="user-dropdown-menu">
        <a href="/account">Мій акаунт</a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Вийти</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>
