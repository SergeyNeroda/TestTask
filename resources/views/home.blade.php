@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="site-container hero__inner">
        <div class="hero__content">
            <h1 class="hero__title">Explore the Frontiers of Artificial Intelligence</h1>
            <p class="hero__subtitle">
                Welcome to the epicenter of AI innovation. FutureTech AI News is your passport to a world where machines think, learn, and reshape the future. Join us on this visionary expedition into the heart of AI.
            </p>
            <div class="hero__stats">
                <div class="stat-card">
                    <p class="stat-card__number">300<span class="stat-card__plus">+</span></p>
                    <p class="stat-card__label">Resources available</p>
                </div>
                <div class="stat-card">
                    <p class="stat-card__number">12k<span class="stat-card__plus">+</span></p>
                    <p class="stat-card__label">Total Downloads</p>
                </div>
                <div class="stat-card">
                    <p class="stat-card__number">10k<span class="stat-card__plus">+</span></p>
                    <p class="stat-card__label">Active Users</p>
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
                <p class="resources-widget__text">Explore 1000+ resources</p>
                <p class="resources-widget__subtext">Over 1,000 articles on emerging tech trends and breakthroughs.</p>
                <a href="/resources" class="resources-widget__btn">
                    Explore Resources
                    <svg width="16" height="16" fill="var(--color-accent)" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 8h8M8 4l4 4-4 4" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="features-strip">
    <div class="site-container features-strip__inner">
        <div class="feature-card">
            <div class="feature-card__icon">
                <svg width="24" height="24" fill="var(--color-accent)" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 4h20v16H2z" stroke="currentColor" stroke-width="2" fill="none"/>
                    <path d="M6 8h12M6 12h12M6 16h12" stroke="currentColor" stroke-width="2"/>
                </svg>
            </div>
            <h3 class="feature-card__title">Latest News Updates</h3>
            <p class="feature-card__subtitle">Over 1,000 articles published monthly</p>
        </div>
        <div class="feature-card">
            <div class="feature-card__icon">
                <svg width="24" height="24" fill="var(--color-accent)" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
                    <path d="M12 10a4 4 0 100-8 4 4 0 000 8zm0 2c-4 0-6 2-6 4v2h12v-2c0-2-2-4-6-4z" stroke="currentColor" stroke-width="2" fill="none"/>
                </svg>
            </div>
            <h3 class="feature-card__title">Expert Contributors</h3>
            <p class="feature-card__subtitle">50+ renowned AI experts on our team</p>
        </div>
        <div class="feature-card">
            <div class="feature-card__icon">
                <svg width="24" height="24" fill="var(--color-accent)" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
                    <path d="M2 12h20M12 2v20M5 5l14 14M19 5L5 19" stroke="currentColor" stroke-width="2" fill="none"/>
                </svg>
            </div>
            <h3 class="feature-card__title">Global Readership</h3>
            <p class="feature-card__subtitle">2 million monthly readers</p>
        </div>
    </div>
</section>
<section class="features-intro">
    <div class="site-container features-intro__inner">
        <p class="features-intro__pretitle">Unlock the Power of</p>
        <h2 class="features-intro__title">FutureTech Features</h2>
    </div>
</section>

<section class="featured-article">
    <div class="featured-content">
        <div class="featured-text">
            <a href="/" class="featured-logo">
                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='40'%3E%3Crect width='100%25' height='100%25' fill='%23ccc'/%3E%3C/svg%3E" alt="Logo" width="40" height="40">
            </a>
            <h1 class="featured-title">Space Exploration Whitepaper</h1>
            <p class="featured-subtitle">An in-depth whitepaper covering the latest advancements in space exploration, including Mars missions and asteroid mining.</p>
            <div class="meta-chips">
                <span class="meta-chip">Publication Date: September 2023</span>
                <span class="meta-chip">Category: Space Exploration</span>
                <span class="meta-chip">Author: FutureTech Space Division</span>
            </div>
            <a href="/assets/whitepaper.pdf" class="button button--primary">Download PDF Now</a>
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
            <h3 class="card-title">FutureTech Trends 2024</h3>
            <p class="card-description">An ebook that predicts upcoming technology trends for the next year, including AI developments.</p>
            <div class="card-buttons">
                <a href="/futuretech-trends-2024" class="button button--outline">View Details</a>
                <a href="/assets/futuretech-trends-2024.pdf" class="button button--secondary">Download PDF Now</a>
            </div>
        </div>
    </article>
    <article class="card">
        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100'%3E%3Crect width='100%25' height='100%25' fill='%23ccc'/%3E%3C/svg%3E" alt="Space Exploration Ebook" class="card-image">
        <div class="card-content">
            <h3 class="card-title">Space Exploration Ebook</h3>
            <p class="card-description">An ebook that predicts upcoming technology trends for the next year, including AI developments.</p>
            <div class="card-buttons">
                <a href="/space-exploration-ebook" class="button button--outline">View Details</a>
                <a href="/assets/space-exploration-ebook.pdf" class="button button--secondary">Download PDF Now</a>
            </div>
        </div>
    </article>
    <article class="card">
        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100'%3E%3Crect width='100%25' height='100%25' fill='%23ccc'/%3E%3C/svg%3E" alt="Quantum Computing Whitepaper" class="card-image">
        <div class="card-content">
            <h3 class="card-title">Quantum Computing Whitepaper</h3>
            <p class="card-description">An in-depth whitepaper exploring the principles, applications.</p>
            <div class="card-buttons">
                <a href="/quantum-computing-whitepaper" class="button button--outline">View Details</a>
                <a href="/assets/quantum-computing-whitepaper.pdf" class="button button--secondary">Download PDF Now</a>
            </div>
        </div>
    </article>
</section>
@endsection
