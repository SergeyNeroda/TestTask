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
                    <p class="stat-card__number">300<span class="stat-card__plus">+</span></p>
                    <p class="stat-card__label">Доступних ресурсів</p>
                </div>
                <div class="stat-card">
                    <p class="stat-card__number">12k<span class="stat-card__plus">+</span></p>
                    <p class="stat-card__label">Завантажень</p>
                </div>
                <div class="stat-card">
                    <p class="stat-card__number">10k<span class="stat-card__plus">+</span></p>
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
<section class="ft-hero">
    <div class="ft-hero__inner container">
        <div class="ft-hero__logo">
            <svg class="ft-hero__logo-image" width="64" height="64" fill="var(--color-accent)" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 0C7.163 0 0 7.163 0 16s7.163 16 16 16 16-7.163 16-16S24.837 0 16 0zm0 30C8.28 30 2 23.72 2 16S8.28 2 16 2s14 6.28 14 14-6.28 14-14 14z"/>
                <path d="M11 11h10v10H11z"/>
            </svg>
        </div>

        <div class="ft-hero__text">
            <p class="ft-hero__tagline">Навчайтесь, спілкуйтесь та вдосконалюйтесь</p>
            <h2 class="ft-hero__headline">Станьте частиною технологічної революції майбутнього</h2>
            <ul class="ft-hero__bullets">
                <li>Досліджуйте наші ресурси</li>
                <li>Спілкуйтеся з однодумцями</li>
                <li>Розвивайте інновації</li>
            </ul>
        </div>
    </div>

    <div class="ft-hero__cards container">
        <div class="ft-card">
            <h3 class="ft-card__title">Доступ до ресурсів</h3>
            <p class="ft-card__desc">
                Відвідувачі можуть отримати доступ до широкого спектру матеріалів, включно з електронними книгами, whitepaper та звітами.
            </p>
            <a href="/resources" class="ft-card__link">
                <span class="ft-card__icon">→</span>
            </a>
        </div>
        <div class="ft-card">
            <h3 class="ft-card__title">Форум спільноти</h3>
            <p class="ft-card__desc">
                Приєднуйтесь до активного форуму, щоб обговорювати галузеві тренди, ділитися досвідом та співпрацювати з колегами.
            </p>
            <a href="/forum" class="ft-card__link">
                <span class="ft-card__icon">→</span>
            </a>
        </div>
        <div class="ft-card">
            <h3 class="ft-card__title">Технічні події</h3>
            <p class="ft-card__desc">
                Слідкуйте за анонсами технічних заходів, вебінарів і конференцій, щоб поглиблювати знання.
            </p>
            <a href="/events" class="ft-card__link">
                <span class="ft-card__icon">→</span>
            </a>
        </div>
    </div>
</section>

<section class="advantages">
    <div class="features-intro">
        <div class="site-container features-intro__inner">
            <p class="features-intro__pretitle">Наші переваги</p>
            <h2 class="features-intro__title">Чому обирають FutureTech</h2>
        </div>
    </div>
    <section class="features-strip">
        <div class="site-container features-strip__inner">
        <div class="feature-card">
            <div class="feature-card__icon">
                <svg width="24" height="24" fill="var(--color-accent)" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 4h20v16H2z" stroke="currentColor" stroke-width="2" fill="none"/>
                    <path d="M6 8h12M6 12h12M6 16h12" stroke="currentColor" stroke-width="2"/>
                </svg>
            </div>
            <h3 class="feature-card__title">Останні новини</h3>
            <p class="feature-card__subtitle">Понад 1,000 статей щомісяця</p>
        </div>
        <div class="feature-card">
            <div class="feature-card__icon">
                <svg width="24" height="24" fill="var(--color-accent)" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
                    <path d="M12 10a4 4 0 100-8 4 4 0 000 8zm0 2c-4 0-6 2-6 4v2h12v-2c0-2-2-4-6-4z" stroke="currentColor" stroke-width="2" fill="none"/>
                </svg>
            </div>
            <h3 class="feature-card__title">Експертні автори</h3>
            <p class="feature-card__subtitle">Понад 50 відомих фахівців з ШІ у нашій команді</p>
        </div>
        <div class="feature-card">
            <div class="feature-card__icon">
                <svg width="24" height="24" fill="var(--color-accent)" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
                    <path d="M2 12h20M12 2v20M5 5l14 14M19 5L5 19" stroke="currentColor" stroke-width="2" fill="none"/>
                </svg>
            </div>
            <h3 class="feature-card__title">Глобальна аудиторія</h3>
            <p class="feature-card__subtitle">2 мільйони читачів щомісяця</p>
        </div>
    </section>
</section>

<section class="featured-article">
    <div class="featured-content">
        <div class="featured-text">
            <a href="/" class="featured-logo">
                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='40'%3E%3Crect width='100%25' height='100%25' fill='%23ccc'/%3E%3C/svg%3E" alt="Logo" width="40" height="40">
            </a>
            <div class="featured-title-wrapper">
                <h2 class="featured-title">Білий документ з дослідження космосу</h2>
                <a href="/assets/whitepaper.pdf" class="button button--primary featured-download">Завантажити PDF</a>
            </div>
            <p class="featured-subtitle">Докладний whitepaper про останні досягнення у дослідженні космосу, зокрема місії на Марс та видобуток астероїдів.</p>
            <div class="meta-chips">
                <span class="meta-chip">Дата публікації: вересень 2023</span>
                <span class="meta-chip">Категорія: дослідження космосу</span>
                <span class="meta-chip">Автор: FutureTech Space Division</span>
            </div>
        </div>
        <div class="featured-image-wrapper">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100'%3E%3Crect width='100%25' height='100%25' fill='%23ccc'/%3E%3C/svg%3E" alt="Space AI" class="featured-image">
        </div>
    </div>
</section>

<section class="articles-grid">
    <article class="card">
        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100'%3E%3Crect width='100%25' height='100%25' fill='%23ccc'/%3E%3C/svg%3E" alt="FutureTech Trends 2024" class="card-image">
        <div class="card-content">
            <h3 class="card-title">Тренди FutureTech 2024</h3>
            <p class="card-description">Електронна книга з прогнозами технологічних трендів на наступний рік, включно з розвитком ШІ.</p>
            <div class="card-buttons">
                <a href="/futuretech-trends-2024" class="button button--outline">Детальніше</a>
                <a href="/assets/futuretech-trends-2024.pdf" class="button button--secondary">Завантажити PDF</a>
            </div>
        </div>
    </article>
    <article class="card">
        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100'%3E%3Crect width='100%25' height='100%25' fill='%23ccc'/%3E%3C/svg%3E" alt="Space Exploration Ebook" class="card-image">
        <div class="card-content">
            <h3 class="card-title">Електронна книга «Дослідження космосу»</h3>
            <p class="card-description">Електронна книга з прогнозами технологічних трендів на наступний рік, включно з розвитком ШІ.</p>
            <div class="card-buttons">
                <a href="/space-exploration-ebook" class="button button--outline">Детальніше</a>
                <a href="/assets/space-exploration-ebook.pdf" class="button button--secondary">Завантажити PDF</a>
            </div>
        </div>
    </article>
    <article class="card">
        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100'%3E%3Crect width='100%25' height='100%25' fill='%23ccc'/%3E%3C/svg%3E" alt="Quantum Computing Whitepaper" class="card-image">
        <div class="card-content">
            <h3 class="card-title">Whitepaper з квантових обчислень</h3>
            <p class="card-description">Докладний whitepaper, що досліджує принципи та застосування.</p>
            <div class="card-buttons">
                <a href="/quantum-computing-whitepaper" class="button button--outline">Детальніше</a>
                <a href="/assets/quantum-computing-whitepaper.pdf" class="button button--secondary">Завантажити PDF</a>
            </div>
        </div>
    </article>
</section>
@endsection
