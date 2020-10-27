@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Сторінка перегляду статті') }}</div>

                <div class="card-body">
                    <p>
                        Заголовок: {{$article->title}}
                    <p/>
                    <p>
                        Текст: {{$article->text}}
                    <p/>
                          
                </div>
                    
            </div>

        </div>
    </div>
</div>
@endsection