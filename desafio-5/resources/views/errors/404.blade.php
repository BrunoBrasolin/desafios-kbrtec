@extends('layouts.site')

@section('title', 'Página não encontrada')

@section('content')

<main class="404-page">
  <h1 class="title">404</h1>
  <h2 class="subtitle">Página não encontrada</h2>
  <a href="{{route('home')}}" class="button">Voltar para página inicial</a>
</main>

@endsection