@extends('layouts.app')

@section('content')
@include('partials.page-banner', ['title' => 'Подкасти'])
@include('partials.breadcrumbs', ['items' => [
    ['label' => 'Головна', 'url' => route('home.index')],
    ['label' => 'Подкасти']
]])
@endsection
