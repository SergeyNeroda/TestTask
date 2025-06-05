@extends('layouts.app')

@section('content')
@include('partials.page-banner', ['title' => 'Список видалених статтей'])
<div class="site-container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Список видалених статтей</h2>
        <a href="{{ route('articles') }}" class="btn btn--accent">Список статтей</a>
    </div>

    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    @if(session()->get('danger'))
        <div class="alert alert-danger">
            {{ session()->get('danger') }}
        </div>
    @endif
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
                        <form action="{{ route('articles.permamentdelete', $article->id)}}" method="post" style="display:inline-block;" role="form" aria-label="Видалити остаточно">
                            @csrf
                            @method('DELETE')
                            <button class="button button--secondary" type="submit">Видалити остаточно</button>
                        </form>
                        <form method="POST" action="{{ route('articles.restore',$article->id) }}" style="display:inline-block;" role="form" aria-label="Відновити статтю">
                            @method('PATCH')
                            @csrf
                            <button class="button button--primary" type="submit">Відновити</button>
                        </form>
                    </div>
                </div>
            </article>
        @empty
            <div class="alert alert-warning">
                Видалені статті відсутні
            </div>
        @endforelse
    </section>
</div>
@endsection
