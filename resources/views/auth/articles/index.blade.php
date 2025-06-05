@extends('layouts.app')

@section('content')
@include('partials.page-banner', ['title' => 'Список статтей'])
@include('partials.breadcrumbs', ['items' => [
    ['label' => 'Головна', 'url' => route('home.index')],
    ['label' => 'Статті']
]])
<div class="site-container">
    <div class="mb-4 text-end">
        <a href="{{ route('articles.create') }}" class="btn btn--accent ml-2">Додати</a>
        <a href="{{ route('articles.softdeleted') }}" class="btn btn--accent ml-2">Видалені статті</a>
        <a href="{{ route('articles.author') }}" class="btn btn--accent ml-2">Авторські статті</a>
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
                        <a href="{{ route('articles.show',$article->id) }}" class="action-button action-button--view">Переглянути</a>
                        @if ($auth_user && $article->isAuthor($auth_user))
                            <a href="{{ route('articles.edit',$article->id) }}" class="action-button action-button--edit">Редагувати</a>
                            <form action="{{ route('articles.destroy', $article->id)}}" method="post" style="display:inline-block;" role="form" aria-label="Видалити статтю">
                                @csrf
                                @method('DELETE')
                                <button class="action-button action-button--delete" type="submit">Видалити</button>
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
