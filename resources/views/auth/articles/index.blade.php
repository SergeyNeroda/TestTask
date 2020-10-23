@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center ">
                        <h5 class="card-title mb-0">Список статтей</h5>
                        <a href="{{ route('articles.create') }}" class="btn btn-success">Додати</a>
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
                        <div class="card-footer">
                            <div class="d-flex flex-row-reverse">
                                @if ($auth_user && $article->isAuthor($auth_user))

                                    <div class="card ml-2">
                                        <a href="{{ route('articles.edit',$article->id) }}" class="btn btn-primary text-white">Редагувати</a>
                                    </div>
                                    <div class="card ml-2">
                                        <form action="{{ route('articles.destroy', $article->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Видалити</button>
                                        </form>
                                    </div>
                                 
                                @endif
                                <div class="card ml-2">
                                    <a href="{{ route('articles.show',$article->id) }}" class="btn btn-info text-white">Переглянути</a>
                                </div>
                               
                            </div>
                        </div>
                    </div>

                    @empty
                        <div class="alert alert-warning">
                            Статті відсутні
                        </div>
                    @endforelse

                    
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection