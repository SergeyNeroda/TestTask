@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center ">
                        <h5 class="card-title mb-0">Список статтей</h5>
                        <a href="{{ route('articles.create') }}" class="btn btn-primary">Додати</a>
                    </div>
                </div>

                <div class="card-body">
                    @if(session()->get('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                    @endif

                    @forelse ($articles as $article)
                    <div class="card mb-3">
                        <div class="card-header">
                            <div>{{$article->title}}</div>
                        </div>
                        <div class="card-body">
                            <div>{{$article->text}}</div>
                        </div>
                    </div>
                    {{--  <br/>  --}}
                    @empty
                        <div>Статті відсутні</div>
                    @endforelse
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection