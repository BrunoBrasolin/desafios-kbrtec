@extends('layouts.site')

@section('title', __('texts.seja_parceiro.title') )

@section('content')

<main class="seja_parceiro-page">

  <header class="topbar">
    <h1 class="title">{{ __('texts.seja_parceiro.title') }}</h1>
  </header>


  <section class="content">
    <img src="{{supportsWebp() ? asset('images/seja-parceiro-banner.webp') : asset('images/seja-parceiro-banner.png')}}" alt="" title="" class="background-image">

    <form class="form">
      <h2 class="subtitle">{!! __('texts.seja_parceiro.subtitle') !!}</h2>

      <div class="input-group">
        <label for="empresa" class="label">{{ __('texts.words.company') }}:</label>
        <input type="text" class="input" id="empresa">
      </div>

      <div class="input-row">
        <div class="input-group">
          <label for="responsavel" class="label">{{ __('texts.words.responsible') }}:</label>
          <input type="text" class="input" id="responsavel">
        </div>

        <div class="input-group">
          <label for="telefone" class="label">{{ __('texts.words.phone') }}:</label>
          <input type="text" class="input" id="telefone">
        </div>
      </div>

      <div class="input-group">
        <label for="email" class="label">E-mail:</label>
        <input type="text" class="input" id="email">
      </div>

      <div class="input-group">
        <label for="mensagem" class="label">{{ __('texts.words.message') }}:</label>
        <textarea id="mensagem" class="input textarea" rows="6"></textarea>
      </div>

      <button type="submit" class="form-button">{{ __('texts.words.sent') }}</button>
    </form>
  </section>

</main>

@endsection