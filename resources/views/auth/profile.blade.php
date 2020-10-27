@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                 <div class="card-header">{{ __('Деталі аккаунту') }}</div>
                
                <div class="card-body">
                   
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item ">Аватар: <img src="{{$auth_user->avatar}}" style="height:100px"/></li>
                            <li class="list-group-item">Нікнейм: {{$auth_user->nickname}}</li>
                            <li class="list-group-item">Прізвище: {{$auth_user->surname}}</li>
                            @if($auth_user->show_phone)
                                <li class="list-group-item">Телефон: {{$auth_user->phone}}</li>
                            @endif
                            <li class="list-group-item">Стать: 
                                @if ($auth_user->sex === 'Male')
                                    Чоловік
                                @elseif ($auth_user->sex === 'Female')
                                    Жінка
                                @else
                                    Undefined
                                @endif
                            </li>
                            {{--  <li class="list-group-item">Показати телефон: {{$auth_user->show_phone}}</li>  --}}
                          </ul>
                    </div>
                    @if(session()->get('success'))
                        <div class="alert alert-success mt-2">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    @if(session()->get('danger'))
                        <div class="alert alert-danger mt-2">
                            {{ session()->get('danger') }}
                        </div>
                    @endif
                     
                </div>

                <div class="card-footer">
                    <a href="{{ route('users.edit') }}" class="btn btn-primary">Редагувати</a>
                    <a href="{{ route('users.edit_password') }}" class="btn btn-primary">Змінити пароль</a>
                </div>
                    
            </div>

        </div>
    </div>
</div>
@endsection