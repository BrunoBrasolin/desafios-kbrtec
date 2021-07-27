@extends('layouts.site')

@section('title', __('texts.contato.title') )

@section('content')

<main class="contato-page">

  <section class="top-content">
    <header class="top-content__topbar">
      @include('includes.breadcrumbs')
      <h1 class="title">{{ __('texts.contato.title') }}</h1>
    </header>

    <div class="row">
      <form class="left form">
        <h2 class="subtitle">{!! __('texts.contato.subtitle') !!}</h2>

        <div class="input-group">
          <label for="nome" class="label">{{ __('texts.words.name') }}:</label>
          <input type="text" class="input" id="nome">
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

      <div class="right">
        <img class="image" src="{{supportsWebp() ? asset('images/contato-image.webp') : asset('images/contato-image.png')}}" alt="{{ __('texts.contato.title') }} | {{ __('texts.application_name') }}" title="{{ __('texts.contato.title') }} | {{ __('texts.application_name') }}" class="background-image">

        <div class="social-content">
          <a href="{{env('FACEBOOK_LINK') ?? '#'}}" target="_blank" class="social-link" title="Facebook | {{ __('texts.application_name') }}">
            <img src="{{asset('svg/facebook-purple-transparent.svg')}}" class="icon" alt="Facebook | {{ __('texts.application_name') }}" title="Facebook | {{ __('texts.application_name') }}">
            <span class="text">/clubeatribuna</span>
          </a>
          <a href="{{env('INSTAGRAM_LINK') ?? '#'}}" target="_blank" class="social-link" title="Instagram | {{ __('texts.application_name') }}">
            <img src="{{asset('svg/instagram-purple-transparent.svg')}}" class="icon" alt="Instagram | {{ __('texts.application_name') }}" title="Instagram | {{ __('texts.application_name') }}">
            <span class="text">@clubeatribuna</span>
          </a>
          <a href="{{env('EMAIL_LINK') ?? '#'}}" target="_blank" class="social-link" title="E-mail | {{ __('texts.application_name') }}">
            <img src="{{asset('svg/email-purple-transparent.svg')}}" class="icon" alt="E-mail | {{ __('texts.application_name') }}" title="E-mail | {{ __('texts.application_name') }}">
            <span class="text">atendimento@grupo-tribuna.com</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="bottom-content">
    <h2 class="subtitle">{{ __('texts.contato.location.subtitle') }}</h2>

    <div class="location">
      <img src="{{asset('svg/pin-blue.svg')}}" class="icon" alt="Pin | {{ __('texts.application_name') }}" title="Pin | {{ __('texts.application_name') }}">
      <strong class="city">Santos</strong>
      <span class="endereco">
        RUA JOÃO PESSOA, 329 - CENTRO
        <br />
        SANTOS/SP - 11.013-900
      </span>
      <a href="https://goo.gl/maps/GN6iQocZyDGgisH6A" target="_blank" class="link" title="{{ __('texts.contato.location.subtitle') }} | {{ __('texts.application_name') }}"></a>
    </div>
  </section>

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d455.83623203034784!2d-46.322059168784186!3d-23.936034114001476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce0380540c9ae7%3A0xe94d50ef93c54192!2sR.%20Jo%C3%A3o%20Pessoa%2C%20329%20-%20Centro%2C%20Santos%20-%20SP%2C%2011013-003!5e0!3m2!1sen!2sbr!4v1626357340776!5m2!1sen!2sbr" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

</main>

@endsection