@extends('layouts.app')

@section('content')
<section class="hero-banner" style="background-color:#ccc;">
    <div class="hero-banner__overlay"></div>
    <h1 class="hero-banner__title">{{ $article->title }}</h1>
</section>

<div class="container post-container">
    <div class="post-content">
        <div class="post-stats-bar">
            <div class="post-stat"><span class="icon-heart">❤️</span> <span class="stat-number">24.8k</span></div>
            <div class="post-stat"><span class="icon-eye">👁</span> <span class="stat-number">50k</span></div>
            <div class="post-stat"><span class="icon-comment">💬</span> <span class="stat-number">30k</span></div>
            <div class="post-share"><span class="icon-share">🔗 Share</span></div>
        </div>

        <h2 class="post-section-title" id="introduction">Introduction</h2>
        <p class="post-paragraph">{{ $article->text }}</p>
    </div>
    <aside class="post-sidebar">
        <div class="post-meta-card">
            <div class="meta-field">
                <p class="meta-label">Publication Date</p>
                <p class="meta-value">{{ $article->created_at->format('F d, Y') }}</p>
            </div>
            <div class="meta-field">
                <p class="meta-label">Category</p>
                <p class="meta-value">General</p>
            </div>
            <div class="meta-field">
                <p class="meta-label">Reading Time</p>
                <p class="meta-value">5 Min</p>
            </div>
            <div class="meta-field">
                <p class="meta-label">Author Name</p>
                <p class="meta-value">{{ $article->users->first()->nickname ?? 'Unknown' }}</p>
            </div>
        </div>

        <div class="post-toc-card">
            <p class="toc-title">Table of Contents</p>
            <ul class="toc-list">
                <li><a href="#introduction">Introduction</a></li>
            </ul>
        </div>
    </aside>
</div>

<section class="similar-news-section">
    <div class="similar-news-header">
        <h2>Similar News</h2>
        <a href="/news">View All News →</a>
    </div>
    <div class="similar-news-grid">
        <div class="similar-card">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100'%3E%3Crect width='100%25' height='100%25' fill='%23ccc'/%3E%3C/svg%3E" alt="Politics Story" class="similar-card__image" />
            <p class="similar-card__category">Politics</p>
            <h3 class="similar-card__title">A Decisive Victory for Progressive Policies</h3>
            <div class="similar-card__stats">
                <span class="icon-eye">👁 2.2k</span>
                <span class="icon-comment">💬 60</span>
            </div>
            <a href="#" class="similar-card__link">Read More →</a>
        </div>
        <div class="similar-card">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100'%3E%3Crect width='100%25' height='100%25' fill='%23ccc'/%3E%3C/svg%3E" alt="Technology Story" class="similar-card__image" />
            <p class="similar-card__category">Technology</p>
            <h3 class="similar-card__title">Tech Giants Unveil Cutting-Edge AI Innovations</h3>
            <div class="similar-card__stats">
                <span class="icon-eye">👁 6k</span>
                <span class="icon-comment">💬 92</span>
            </div>
            <a href="#" class="similar-card__link">Read More →</a>
        </div>
        <div class="similar-card">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100'%3E%3Crect width='100%25' height='100%25' fill='%23ccc'/%3E%3C/svg%3E" alt="Health Story" class="similar-card__image" />
            <p class="similar-card__category">Health</p>
            <h3 class="similar-card__title">COVID-19 Variants</h3>
            <div class="similar-card__stats">
                <span class="icon-eye">👁 10k</span>
                <span class="icon-comment">💬 124</span>
            </div>
            <a href="#" class="similar-card__link">Read More →</a>
        </div>
    </div>
</section>

@endsection