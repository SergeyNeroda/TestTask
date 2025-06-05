@extends('layouts.app')

@section('content')
@include('partials.page-banner', ['title' => 'Авторські статті'])

<div class="site-container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Авторські статті</h2>
        <a href="{{ route('articles') }}" class="btn btn--accent">Список статтей</a>
    </div>

    @if($error)
        <div class="alert alert-danger">
            {{ $error }}
        </div>
    @endif

    <section class="articles-grid">
        @forelse ($articles as $article)
            <article class="card">
                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100'%3E%3Crect width='100%25' height='100%25' fill='%23ccc'/%3E%3C/svg%3E" alt="Article image" class="card-image">
                <div class="card-content">
                    <h3 class="card-title">{{ $article->title }}</h3>
                    <p class="card-description">{{ \Illuminate\Support\Str::limit($article->text, 150) }}</p>
                    <div class="card-buttons">
                        <a href="{{ route('articles.show',$article->id) }}" class="button button--outline">Переглянути</a>
                        @if ($auth_user && $article->isAuthor($auth_user))
                            <a href="{{ route('articles.edit',$article->id) }}" class="button button--primary">Редагувати</a>
                            <form action="{{ route('articles.destroy', $article->id)}}" method="post" style="display:inline-block;" role="form" aria-label="Видалити статтю">
                                @csrf
                                @method('DELETE')
                                <button class="button button--secondary" type="submit">Видалити</button>
                            </form>
                        @endif
                    </div>
                </div>
            </article>
        @empty
            <div class="alert alert-warning">
                Статті відсутні
            </div>
        @endforelse
    </section>
</div>
@endsection
