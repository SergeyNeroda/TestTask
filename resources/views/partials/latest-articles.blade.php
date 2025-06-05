<section class="latest-articles" aria-labelledby="latest-articles-heading">
    <div class="site-container">
        <h2 id="latest-articles-heading" class="latest-articles__title">Найновіші статті на тему інновацій</h2>
        <div class="articles-grid">
            @php use Illuminate\Support\Str; @endphp
            @foreach($articles as $article)
                <article class="card" itemscope itemtype="http://schema.org/Article">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100'%3E%3Crect width='100%25' height='100%25' fill='%23ccc'/%3E%3C/svg%3E" alt="{{ $article->title }}" class="card-image" itemprop="image">
                    <div class="card-content">
                        <h3 class="card-title" itemprop="headline">{{ $article->title }}</h3>
                        <p class="card-description" itemprop="description">{{ Str::limit($article->text, 120) }}</p>
                        <p class="card-meta">
                            <time datetime="{{ $article->created_at->toDateString() }}" itemprop="datePublished">{{ $article->created_at->format('d.m.Y') }}</time>
                            — <span itemprop="author">{{ $article->users->first()->nickname ?? 'Невідомий автор' }}</span>
                        </p>
                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn--accent" aria-label="Читати більше про {{ $article->title }}" itemprop="url">Читати далі</a>
                    </div>
                </article>
            @endforeach
        </div>
        <div class="latest-articles__footer">
            <a href="{{ route('articles') }}" class="btn btn--accent">Завантажити ще</a>
        </div>
    </div>
</section>
