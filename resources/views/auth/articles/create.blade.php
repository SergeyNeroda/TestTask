@extends('layouts.app')

@section('content')
@include('partials.page-banner', ['title' => __('Створити статтю')])
<div class="site-container">
    <form method="POST" action="{{ route('articles.store') }}" class="contact-form">
        @csrf
        @if(session()->get('danger'))
            <div class="alert alert-danger">
                {{ session()->get('danger') }}
            </div>
        @endif

        <div class="form-row">
            <div class="form-field form-field--full">
                <label for="title" class="form-label">{{ __('Заголовок') }}</label>
                <input id="title" type="text" class="form-input @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-field form-field--full">
                <label for="text" class="form-label">{{ __('Текст') }}</label>
                <textarea class="form-textarea @error('text') is-invalid @enderror" id="text" name="text" required autocomplete="text" rows="4">{{ old('text') }}</textarea>
                @error('text')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-row form-row--footer">
            <button type="submit" class="btn btn--accent">
                {{ __('Зберегти') }}
            </button>
        </div>
    </form>
</div>
@endsection