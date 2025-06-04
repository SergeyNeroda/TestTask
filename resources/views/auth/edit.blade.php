@extends('layouts.app')

@section('content')
@include('partials.page-banner', ['title' => __('Редагувати інформацію')])
<div class="site-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Редагувати інформацію') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
      
                        <div class="form-group row">
                            <label for="nickname" class="col-md-4 col-form-label text-md-right">{{ __('Нікнейм') }}</label>

                            <div class="col-md-6">
                                <input id="nickname" value="{{ $user->nickname }}" type="text" class="form-control @error('nickname') is-invalid @enderror" name="nickname" value="{{ old('nickname') }}" required autocomplete="nickname" autofocus>

                                @error('nickname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Прізвище') }}</label>

                            <div class="col-md-6">
                                <input id="surname" value="{{ $user->surname }}" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname">

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Аватар') }}</label>
                            <div class="col-md-6">
                                
                                <input id="avatar" class=" @error('avatar') is-invalid @enderror" value="{{ old('avatar') }}" type="file"  name="avatar">
                                @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Телефон') }}</label>

                            <div class="col-md-6">
                                <input id="phone" value="{{ $user->phone }}" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('Стать') }}</label>

                            <div class="col-md-6">
                                <select id="sex" type="text" class="form-control @error('sex') is-invalid @enderror" name="sex"  required>
                                    <option selected disabled>Оберіть стать...</option>
                                    <option value="Male" @if ($user->sex == "Male") {{ 'selected' }} @endif @if (old('sex') == "Male") {{ 'selected' }} @endif>Чоловік</option>
                                    <option value="Female" @if ($user->sex == "Female") {{ 'selected' }} @endif @if (old('sex') == "Female") {{ 'selected' }} @endif>Жінка</option>
                                </select>

                                @error('sex')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="show_phone" class="col-md-4 col-form-label form-check-label text-md-right">{{ __('Показ телефону') }}</label>

                            <div class="col-md-6">
                            {{--  <div class="form-control">  --}}
                                <div class="form-check  @error('show_phone') is-invalid @enderror">
                                    <input class="form-check-input" type="radio" name="show_phone" id="show_phone_1" value="0" @if( $user->show_phone =="0") checked @endif @if(old('show_phone')=="0") checked @endif>
                                    <label class="form-check-label" for="show_phone_1">
                                      Приховати
                                    </label>
                                  </div>

                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="show_phone" id="show_phone_2" value="1" @if( $user->show_phone =="1") checked @endif>
                                    <label class="form-check-label" for="show_phone_2">
                                      Показати
                                    </label>
                                  </div>
                                
                                @error('show_phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{--  </div>  --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Імейл') }}</label>

                            <div class="col-md-6">
                                <input id="email" value="{{ $user->email }}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn--accent">
                                    {{ __('Зберегти') }}
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