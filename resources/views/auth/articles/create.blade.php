@extends('layouts.app')

@section('content')
@include('partials.page-banner', ['title' => __('Створити статтю')])
@include('partials.breadcrumbs', ['items' => [
    ['label' => 'Головна', 'url' => route('home.index')],
    ['label' => 'Статті', 'url' => route('articles')],
    ['label' => 'Створити']
]])
<div class="site-container">
    <form method="POST" action="{{ route('articles.store') }}" class="contact-form" role="form" aria-label="Створення статті">
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
                <input type="hidden" id="text" name="text" value="{{ old('text') }}">
                <div id="quill-toolbar">
                    <span class="ql-formats">
                        <button class="ql-bold" title="Жирний"></button>
                        <button class="ql-italic" title="Курсив"></button>
                    </span>
                    <span class="ql-formats">
                        <select class="ql-header" title="Заголовок">
                            <option selected></option>
                            <option value="1">H1</option>
                            <option value="2">H2</option>
                            <option value="3">H3</option>
                        </select>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-list" value="ordered" title="Нумерований список"></button>
                        <button class="ql-list" value="bullet" title="Маркірований список"></button>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-link" title="Додати посилання"></button>
                        <button class="ql-image" title="Вставити зображення"></button>
                        <button class="ql-code-block" title="Code block"></button>
                    </span>
                </div>
                <div id="quill-editor"></div>
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
<link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
<style>
    #quill-editor {
        background: #1A1A1A;
        color: #EEE;
        min-height: 300px;
        padding: 16px;
        border-radius: 0 0 6px 6px;
    }
    #quill-toolbar {
        border-radius: 6px 6px 0 0;
    }
</style>
<script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var quill = new Quill('#quill-editor', {
            modules: { toolbar: '#quill-toolbar' },
            theme: 'snow'
        });
        var hiddenInput = document.getElementById('text');
        quill.root.innerHTML = hiddenInput.value;
        quill.on('text-change', function () {
            hiddenInput.value = quill.root.innerHTML;
        });
        hiddenInput.form.addEventListener('submit', function () {
            hiddenInput.value = quill.root.innerHTML;
        });
    });
</script>
@endsection