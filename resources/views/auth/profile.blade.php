@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Account Details Page') }}</div>

                <div class="card-body">
                    <p>
                        Nickname: {{$auth_user->nickname}}
                    <p/>
                    <p>
                        Surname: {{$auth_user->surname}}
                    <p/>
                    <p>
                        Avatar: {{$auth_user->avatar}}
                    <p/>
                    <p>
                        Phone: {{$auth_user->phone}}
                    <p/>
                    <p>
                        Sex: {{$auth_user->sex}}
                    <p/>
                    <p>
                        Show Phone: {{$auth_user->show_phone}}
                    <p/>
                    @if(session()->get('success'))
                          <div class="alert alert-success">
                              {{ session()->get('success') }}
                          </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>
@endsection