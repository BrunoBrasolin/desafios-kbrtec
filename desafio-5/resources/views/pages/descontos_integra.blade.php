@extends('layouts.site')

@section('title', $desconto->post_title)

@section('content')

<main class="descontos_integra-page">
  <header class="topbar">
    <h1 class="title">{{ __('texts.descontos_integra.title') }}
    </h1>
  </header>

  <section class="content">
    <header class="content__header">
      <div class="left">
        <img src="{{$desconto->acf->logo->url}}" alt="">
        <div class="title-container">
          <h1 class="title">{{$desconto->post_title}}</h1>
          <h2 class="subtitle">{{$desconto->subtitulo}}</h2>
        </div>
      </div>

      <div class="right">
        <h3 class="desconto-title">
          <span class="desconto-title__number">
            {{$desconto->desconto}}%
          </span>
          {{ __('texts.descontos_integra.desconto.title') }}
        </h3>

        <a href="{{URL::previous()}}" class="button">{{ __('texts.descontos_integra.button') }}</a>
      </div>
    </header>

    <p class="descricao">{!! $desconto->descricao !!}</p>

    <section class="content__bottom">
      <div class="left">
        @if($desconto->regras)
        <h3 class="left__title">{{ __('texts.descontos_integra.rules.title') }}</h3>
        <div class="regras">
          <p class="desc">
            {!! nl2br($desconto->acf->regras) !!}
          </p>
        </div>
        @endif

        <a href="#" class="button">{{ __('texts.descontos_integra.rules.button') }}</a>
      </div>

      <div class="right">
        <h3 class="right__title">{{ __('texts.descontos_integra.endereco-title') }}</h3>
        <a href="https://goo.gl/maps/GN6iQocZyDGgisH6A" target="_blank" class="endereco">{{$desconto->logradouro}} - {{$desconto->bairro}}/{{$desconto->estado}}, <span class="cep">{{$desconto->cep}}</span></a>
        <h3 class="right__title">{{ __('texts.descontos_integra.contato-title') }}</h3>
        <a href="https://api.whatsapp.com/send?phone={{$desconto->whatsapp}}" target="_blank" class="link whatsapp">
          <img src="{{asset('svg/whatsapp-green.svg')}}" alt="" title="">
          {{$desconto->whatsapp}}
        </a>
        <a href="tel:{{$desconto->telefone}}" target="_blank" class="link telefone">
          <img src="{{asset('svg/phone-call-purple.svg')}}" alt="" title="">
          {{$desconto->telefone}}
        </a>
        <a href="{{$desconto->site}}" target="_blank" class="link site">
          <img src="{{asset('svg/site.svg')}}" alt="" title="">
          <span class="site-text">{{$desconto->site}}</span>
        </a>
        <a href="mailto:{{$desconto->email}}" target="_blank" class="link email">
          <img src="{{asset('svg/email-purple.svg')}}" alt="" title="">
          {{$desconto->email}}
        </a>

        <div class="social-row">
          @if($desconto->facebook)
          <a href="{{$desconto->facebook}}" target="_blank" class="social-row__link facebook">
            <img src="{{asset('svg/facebook-purple.svg')}}" alt="" title="">
          </a>
          @endif
          @if($desconto->instagram)
          <a href="{{$desconto->instagram}}" target="_blank" class="social-row__link instagram">
            <img src="{{asset('svg/instagram-purple.svg')}}" alt="" title="">
          </a>
          @endif
          <span class="text">{{ __('texts.descontos_integra.social.text') }}</span>
        </div>
      </div>
    </section>
  </section>
</main>

@endsection