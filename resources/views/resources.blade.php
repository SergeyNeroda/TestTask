@extends('layouts.app')

@section('content')
@include('partials.page-banner', ['title' => 'Ресурси'])
@include('partials.breadcrumbs', ['items' => [
    ['label' => 'Головна', 'url' => route('home.index')],
    ['label' => 'Ресурси']
]])
@endsection
