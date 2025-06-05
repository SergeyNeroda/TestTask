@extends('layouts.app')

@section('content')
@include('partials.page-banner', ['title' => __('Деталі аккаунту')])
<div class="site-container">
    <div class="account-profile">
        <div class="account-profile__header">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='160' height='160'%3E%3Crect width='100%25' height='100%25' fill='%23ccc'/%3E%3C/svg%3E" alt="Avatar" class="account-profile__avatar">
            <h2 class="account-profile__nickname">{{ $auth_user->nickname }}</h2>
        </div>

        <dl class="account-profile__list">
            <dt>Прізвище</dt>
            <dd>{{ $auth_user->surname }}</dd>
            @if($auth_user->show_phone)
                <dt>Телефон</dt>
                <dd>{{ $auth_user->phone }}</dd>
            @endif
            <dt>Стать</dt>
            <dd>
                @if ($auth_user->sex === 'Male')
                    Чоловік
                @elseif ($auth_user->sex === 'Female')
                    Жінка
                @else
                    Undefined
                @endif
            </dd>
        </dl>

        @if(session()->get('success'))
            <div class="alert alert-success mb-3">
                {{ session()->get('success') }}
            </div>
        @endif
        @if(session()->get('danger'))
            <div class="alert alert-danger mb-3">
                {{ session()->get('danger') }}
            </div>
        @endif

        <div class="account-profile__actions">
            <a href="{{ route('users.edit') }}" class="btn btn--accent">Редагувати</a>
            <a href="{{ route('users.edit_password') }}" class="btn btn--accent">Змінити пароль</a>
            <form action="{{ route('logout') }}" method="POST" role="form" aria-label="Вихід">
                @csrf
                <button type="submit" class="btn btn--secondary">Вийти з акаунту</button>
            </form>
        </div>
    </div>
</div>
@endsection
