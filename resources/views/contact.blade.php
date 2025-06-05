@extends('layouts.app')

@section('content')
<main class="contact-simple">
    <div class="container">
        <h1>Зворотний зв'язок</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('contact.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Ім'я</label>
                <input type="text" id="name" name="name" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="email">Ел. пошта</label>
                <input type="email" id="email" name="email" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="message">Повідомлення</label>
                <textarea id="message" name="message" class="form-textarea" required></textarea>
            </div>
            <button type="submit" class="btn btn--accent">Надіслати</button>
        </form>
    </div>
</main>
@endsection
