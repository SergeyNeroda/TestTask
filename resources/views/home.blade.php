@extends('layouts.app')

@section('content')

<section class="hero">
    <div class="site-container hero__inner">
        <div class="hero__content">
            <h1 class="hero__title">Досліджуйте межі штучного інтелекту</h1>
            <p class="hero__subtitle">
                Ласкаво просимо до епіцентру інновацій ШІ. FutureTech AI News відкриває світ мислячих машин. Приєднуйтесь до подорожі в майбутнє.
            </p>
            <div class="hero__stats">
                <div class="stat-card">
                    <p class="stat-card__number">{{ $resourcesCount }}</p>
                    <p class="stat-card__label">Доступних ресурсів</p>
                </div>
                <div class="stat-card">
                    <p class="stat-card__number">{{ $downloadsCount }}</p>
                    <p class="stat-card__label">Завантажень</p>
                </div>
                <div class="stat-card">
                    <p class="stat-card__number">{{ $usersCount }}</p>
                    <p class="stat-card__label">Активних користувачів</p>
                </div>
            </div>
        </div>
        <div class="hero__graphic">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100'%3E%3Crect width='100%25' height='100%25' fill='%23ccc'/%3E%3C/svg%3E" alt="Futuristic AI network graphic" class="hero__image" />
            <div class="resources-widget">
                <div class="resources-widget__avatars">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32'%3E%3Crect width='100%25' height='100%25' fill='%23ccc'/%3E%3C/svg%3E" alt="Expert 1" class="avatar">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32'%3E%3Crect width='100%25' height='100%25' fill='%23ccc'/%3E%3C/svg%3E" alt="Expert 2" class="avatar">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32'%3E%3Crect width='100%25' height='100%25' fill='%23ccc'/%3E%3C/svg%3E" alt="Expert 3" class="avatar">
                </div>
                <p class="resources-widget__text">Досліджуйте понад 1000 ресурсів</p>
                <p class="resources-widget__subtext">Понад 1000 статей про нові технологічні тенденції та прориви.</p>
                <a href="/resources" class="resources-widget__btn">
                    Переглянути ресурси
                    <svg width="16" height="16" fill="var(--color-accent)" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 8h8M8 4l4 4-4 4" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

@include('partials.latest-articles', ['articles' => $articles])
@endsection
