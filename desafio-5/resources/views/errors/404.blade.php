@extends('layouts.site')

@section('title', 'Página não encontrada')

@section('content')

<main class="404-page">
  <h1 class="title">404</h1>
  <h2 class="subtitle">{{ __('texts.404.subtitle') }}</h2>
  <a href="{{route('home')}}" class="button">{{ __('texts.404.button') }}</a>
</main>

@endsection