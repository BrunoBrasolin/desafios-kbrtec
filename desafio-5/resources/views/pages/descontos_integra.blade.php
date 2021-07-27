@php
$lang = app()->getLocale();

if($lang == 'en')
{
$descontoSubtitle = $desconto->english_subtitle;
$descontoDescription = $desconto->english_description;
$descontoRule = $desconto->rules;
}
else if ($lang == 'pt_BR')
{
$descontoSubtitle = $desconto->subtitulo;
$descontoDescription = $desconto->descricao;
$descontoRule = $desconto->regras;
}
@endphp


@extends('layouts.site')

@section('title', $desconto->post_title)

@section('content')

<main class="descontos_integra-page">
  <header class="topbar">
    @include('includes.breadcrumbs')
    <h1 class="title">{{ __('texts.descontos_integra.title') }}</h1>
  </header>

  <section class="content">
    <header class="content__header">
      <div class="left">
        <img src="{{ $desconto->acf->logo->url}}" alt="{{ $desconto->post_title }} | {{ __('texts.application_name') }}" title="{{ $desconto->post_title }} | {{ __('texts.application_name') }}">
        <div class="title-container">
          <h1 class="title">{{ $desconto->post_title}}</h1>
          <h2 class="subtitle">{{ $descontoSubtitle}}</h2>
        </div>
      </div>

      <div class="right">
        <h3 class="desconto-title">
          <span class="desconto-title__number">
            {{ $desconto->desconto }}%
          </span>
          {{ __('texts.descontos_integra.desconto.title') }}
        </h3>

        <a href="{{URL::previous()}}" class="button" title="{{ __('texts.descontos_integra.button') }} | {{ __('texts.application_name') }}">{{ __('texts.descontos_integra.button') }}</a>
      </div>
    </header>

    <p class="descricao">{!! $descontoDescription !!}</p>

  

    <section class="content__bottom">
      <div class="left">
        @if($descontoRule)
        <h3 class="left__title">{{ __('texts.descontos_integra.rules.title') }}</h3>
        <div class="regras">
          <p class="desc">
            {!! nl2br($descontoRule) !!}
          </p>
        </div>
        @endif

        <a href="#" class="button" title="{{ __('texts.descontos_integra.rules.button') }} | {{ __('texts.application_name') }}">{{ __('texts.descontos_integra.rules.button') }}</a>
      </div>

      <div class="right">
        @if($desconto->logradouro != "" || $desconto->bairro != "" || $desconto->estado != "" || $desconto->cep != "")
        <h3 class="right__title">{{ __('texts.descontos_integra.endereco-title') }}</h3>

        <a href="{{ $desconto->maps != '' ? $desconto->maps : '#'}}" target="_blank" class="endereco" title="{{ __('texts.descontos_integra.endereco-title') }} | {{ __('texts.application_name') }}">
          {{ $desconto->logradouro}} @if($desconto->bairro)- {{ $desconto->bairro}}@endif @if($desconto->estado)/{{ $desconto->estado}}@endif @if($desconto->cep), <span class="cep">{{ $desconto->cep}}</span>@endif
        </a>
        @endif

        @if($desconto->whatsapp != '' || $desconto->telefone != '' || $desconto->site != '' || $desconto->email != '')
        <h3 class="right__title">{{ __('texts.descontos_integra.contato-title') }}</h3>
        @endif

        @if($desconto->whatsapp)
        <a href="https://api.whatsapp.com/send?phone={{ $desconto->whatsapp}}" target="_blank" class="link whatsapp" title="WhatsApp | {{ __('texts.application_name') }}">
          <img src="{{asset('svg/whatsapp-green.svg')}}" alt="WhatsApp | {{ __('texts.application_name') }}" title="WhatsApp | {{ __('texts.application_name') }}">
          <span class="whatsapp_numero">{{ $desconto->whatsapp}}</span>
        </a>
        @endif

        @if($desconto->telefone)
        <a href="tel:{{ $desconto->telefone}}" target="_blank" class="link telefone" title="{{ __('texts.words.phone') }} | {{ __('texts.application_name') }}">
          <img src="{{asset('svg/phone-call-purple.svg')}}" alt="{{ __('texts.words.phone') }} | {{ __('texts.application_name') }}" title="{{ __('texts.words.phone') }} | {{ __('texts.application_name') }}">
          <span class="phone_numero">{{ $desconto->telefone}}</span>
        </a>
        @endif

        @if($desconto->site)
        <a href="{{ $desconto->site}}" target="_blank" class="link site" title="Site | {{ __('texts.application_name') }}">
          <img src="{{asset('svg/site.svg')}}" alt="Website | {{ __('texts.application_name') }}" title="Website | {{ __('texts.application_name') }}">
          <span class="site-text">{{ $desconto->site}}</span>
        </a>
        @endif

        @if($desconto->email)
        <a href="mailto:{{ $desconto->email}}" target="_blank" class="link email" title="Email | {{ __('texts.application_name') }}">
          <img src="{{asset('svg/email-purple.svg')}}" alt="Email | {{ __('texts.application_name') }}" title="Email | {{ __('texts.application_name') }}">
          {{ $desconto->email}}
        </a>
        @endif

        <div class="social-row">
          @if($desconto->facebook)
          <a href="{{ $desconto->facebook}}" target="_blank" class="social-row__link facebook" title="Facebook | {{ __('texts.application_name') }}">
            <img src="{{asset('svg/facebook-purple.svg')}}" alt="Facebook | {{ __('texts.application_name') }}" title="Facebook | {{ __('texts.application_name') }}">
          </a>
          @endif

          @if($desconto->instagram)
          <a href="{{ $desconto->instagram}}" target="_blank" class="social-row__link instagram" title="Instagram | {{ __('texts.application_name') }}">
            <img src="{{asset('svg/instagram-purple.svg')}}" alt="Instagram | {{ __('texts.application_name') }}" title="Instagram | {{ __('texts.application_name') }}">
          </a>
          @endif

          <span class="text">{{ __('texts.descontos_integra.social.text') }}</span>
        </div>
      </div>
    </section>
  </section>
</main>

@endsection