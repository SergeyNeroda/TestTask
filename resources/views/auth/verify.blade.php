@extends('layouts.app')

@section('content')
@include('partials.page-banner', ['title' => __('Підтвердьте вашу електронну адресу')])
<div class="site-container form-centered">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Нове посилання для підтвердження надіслано на вашу електронну адресу.') }}
                        </div>
                    @endif

                    {{ __('Перш ніж продовжити, перевірте електронну пошту, щоб знайти лист з посиланням для підтвердження.') }}
                    {{ __('Якщо ви не отримали листа') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('натисніть тут, щоб надіслати запит ще раз') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
