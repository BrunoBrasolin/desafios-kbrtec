@extends('layouts.site')

@section('title', 'Sobre')

@section('content')

<main class="sobre-page">

  <header class="sobre-page__topbar">
    @include('includes.breadcrumbs')

    <h1 class="title">{{ __('texts.sobre.title') }}</h1>
  </header>

  @include('includes.o-clube')

  @include('includes.vantagens')

  @include('includes.descontos')

</main>

@endsection