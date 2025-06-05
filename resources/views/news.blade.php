@extends('layouts.app')

@section('content')
@include('partials.page-banner', ['title' => 'Новини'])
@include('partials.breadcrumbs', ['items' => [
    ['label' => 'Головна', 'url' => route('home.index')],
    ['label' => 'Новини']
]])
@endsection
