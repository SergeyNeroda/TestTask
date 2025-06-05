@extends('layouts.app')

@section('content')
<section class="hero-banner" style="background-color:#ccc;">
    <div class="hero-banner__overlay"></div>
    <h1 class="hero-banner__title">{{ $article->title }}</h1>
</section>
@include('partials.breadcrumbs', ['items' => [
    ['label' => 'Головна', 'url' => route('home.index')],
    ['label' => 'Статті', 'url' => route('articles')],
    ['label' => $article->title]
]])

<div class="container post-container">
    <div class="post-content">
        <div class="post-stats-bar">
            <div class="post-stat"><span class="icon-heart">❤️</span> <span class="stat-number">24.8k</span></div>
            <div class="post-stat"><span class="icon-eye">👁</span> <span class="stat-number">50k</span></div>
            <div class="post-stat"><span class="icon-comment">💬</span> <span class="stat-number">30k</span></div>
            <div class="post-share"><span class="icon-share">🔗 Поділитися</span></div>
        </div>

        <h2 class="post-section-title" id="introduction">Вступ</h2>
        <div class="post-paragraph">{!! $article->text !!}</div>
    </div>
    <aside class="post-sidebar">
        <div class="post-meta-card">
            <div class="meta-field">
                <p class="meta-label">Дата публікації</p>
                <p class="meta-value">{{ $article->created_at->format('F d, Y') }}</p>
            </div>
            <div class="meta-field">
                <p class="meta-label">Категорія</p>
                <p class="meta-value">General</p>
            </div>
            <div class="meta-field">
                <p class="meta-label">Час читання</p>
                <p class="meta-value">5 Min</p>
            </div>
            <div class="meta-field">
                <p class="meta-label">Автор</p>
                <p class="meta-value">{{ $article->users->first()->nickname ?? 'Unknown' }}</p>
            </div>
        </div>

        <div class="post-toc-card">
            <p class="toc-title">Зміст</p>
            <ul class="toc-list">
                <li><a href="#introduction">Вступ</a></li>
            </ul>
        </div>
    </aside>
</div>

<section class="similar-news-section">
    <div class="similar-news-header">
        <h2>Подібні новини</h2>
        <a href="/news">Усі новини →</a>
    </div>
    <div class="similar-news-grid">
        <div class="similar-card">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100'%3E%3Crect width='100%25' height='100%25' fill='%23ccc'/%3E%3C/svg%3E" alt="Politics Story" class="similar-card__image" />
            <p class="similar-card__category">Політика</p>
            <h3 class="similar-card__title">Рішуча перемога прогресивної політики</h3>
            <div class="similar-card__stats">
                <span class="icon-eye">👁 2.2k</span>
                <span class="icon-comment">💬 60</span>
            </div>
            <a href="#" class="similar-card__link">Докладніше →</a>
        </div>
        <div class="similar-card">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100'%3E%3Crect width='100%25' height='100%25' fill='%23ccc'/%3E%3C/svg%3E" alt="Technology Story" class="similar-card__image" />
            <p class="similar-card__category">Технології</p>
            <h3 class="similar-card__title">Техгіганти представляють передові інновації ШІ</h3>
            <div class="similar-card__stats">
                <span class="icon-eye">👁 6k</span>
                <span class="icon-comment">💬 92</span>
            </div>
            <a href="#" class="similar-card__link">Докладніше →</a>
        </div>
        <div class="similar-card">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100'%3E%3Crect width='100%25' height='100%25' fill='%23ccc'/%3E%3C/svg%3E" alt="Health Story" class="similar-card__image" />
            <p class="similar-card__category">Здоров'я</p>
            <h3 class="similar-card__title">Варіанти COVID-19</h3>
            <div class="similar-card__stats">
                <span class="icon-eye">👁 10k</span>
                <span class="icon-comment">💬 124</span>
            </div>
            <a href="#" class="similar-card__link">Докладніше →</a>
        </div>
    </div>
</section>

@endsection