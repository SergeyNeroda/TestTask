@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center ">
                        <h5 class="card-title mb-0">Усі статті</h5>
                    </div>
                </div>

                <div class="card-body">
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
                        {{--  <div class="card-footer">
                            <div class="d-flex flex-row-reverse">
                                  
                            </div>
                        </div>  --}}
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
