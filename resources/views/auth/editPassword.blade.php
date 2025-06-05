@extends('layouts.app')

@section('content')
@include('partials.page-banner', ['title' => __('Змінити пароль')])
@include('partials.breadcrumbs', ['items' => [
    ['label' => 'Головна', 'url' => route('home.index')],
    ['label' => 'Аккаунт', 'url' => route('users.details')],
    ['label' => 'Змінити пароль']
]])
<div class="site-container form-centered">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if(session()->get('success'))
                    <div  class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                    @if(session()->get('danger'))
                    <div  class="alert alert-danger">
                        {{ session()->get('danger') }}
                    </div>
                    @endif
                    <form method="POST" action="{{ route('users.update_password', $user->id) }}" enctype="multipart/form-data" role="form" aria-label="Змінити пароль">
                        {{--  @method('PATCH')  --}}
                        @method('PUT')
                        @csrf

                        <div class="form-group row">
                            <label for="old_password" class="col-md-4 col-form-label text-md-right">{{ __('Поточний пароль') }}</label>
                            <div class="col-md-6">
                                <input id="old_password" name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" required autofocus>
                                @error('old_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="new_password" class="col-md-4 col-form-label text-md-right">{{ __('Новий пароль') }}</label>
                            <div class="col-md-6">
                                <input id="new_password" name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" required autofocus>
                                @error('new_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password_confirm" class="col-md-4 col-form-label text-md-right">{{ __('Підтвердити пароль') }}</label>
                    
                            <div class="col-md-6">
                                <input id="password_confirm" name="password_confirm" type="password" class="form-control " required
                                       autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn--accent">
                                    {{ __('Змінити') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection