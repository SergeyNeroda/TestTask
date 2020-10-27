@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center ">
                        <h5 class="card-title mb-0">Список видалених статтей</h5>
                        <a href="{{ route('articles') }}" class="btn btn-success">Список статтей</a>
                    </div>
                </div>

                <div class="card-body">
                    @if(session()->get('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                    @endif
                    @if(session()->get('danger'))
                            <div class="alert alert-danger">
                                {{ session()->get('danger') }}
                            </div>
                    @endif
                    @if($error)
                            <div class="alert alert-danger">
                                {{ $error }}
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
                        <div class="card-footer">
                            <div class="d-flex flex-row-reverse">

                                <div class="card ml-2">
                                    <form action="{{ route('articles.permamentdelete', $article->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Видалити остаточно</button>
                                    </form>
                                </div>
                                 
                                <div class="card ml-2">
                                    <form method="POST" action="{{ route('articles.restore',$article->id) }}">
                                        @method('PATCH')
                                        @csrf
                                        <button class="btn btn-primary" type="submit">Відновити</button>
                                    </form>
                                </div>
                               
                            </div>
                        </div>
                    </div>

                    @empty
                        <div class="alert alert-warning">
                            Видалені статті відсутні
                        </div>
                    @endforelse

                    
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection