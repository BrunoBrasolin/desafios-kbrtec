@extends('layouts.site')

@section('content')

<main class="home-page">
  <section class="banner">
    <img src="{{supportsWebp() ? asset('images/banner.webp') : asset('images/banner.png')}}" alt="{{ __('texts.application_name') }}" title="{{ __('texts.application_name') }}" class="banner-image">
    <div class="banner-content">
      <h2 class="title">{{__('texts.home.banner.title')}}</h2>
      <h3 class="subtitle">{!! __('texts.home.banner.subtitle') !!}</h3>

      <div class="row">
        <div class="col left">
          <img class="icon" src="{{asset('/svg/cutlery.svg')}}" alt="Cutlery | {{ __('texts.application_name') }}" title="Cutlery | {{ __('texts.application_name') }}">

          <div class="texts">
            <span class="text">{!! __('texts.home.banner.cols.left.first') !!}</span>
            <span class="text percentage">{!! __('texts.home.banner.cols.left.second') !!}</span>
            <span class="text">{!! __('texts.home.banner.cols.left.third') !!}</span>
          </div>
        </div>

        <div class="col middle">
          <img class="icon" src="{{asset('/svg/gas-pump.svg')}}" alt="Gas Pump | {{ __('texts.application_name') }}" title="Gas Pump | {{ __('texts.application_name') }}">

          <div class="texts">
            <span class="text">{!! __('texts.home.banner.cols.middle.first') !!}</span>
            <span class="text percentage">{!! __('texts.home.banner.cols.middle.second') !!}</span>
            <span class="text">{!! __('texts.home.banner.cols.middle.third') !!}</span>
          </div>
        </div>

        <div class="col right">
          <img class="icon" src="{{asset('/svg/washing-machine.svg')}}" alt="Washing Machine | {{ __('texts.application_name') }}" title="Washing Machine | {{ __('texts.application_name') }}">

          <div class="texts">
            <span class="text">{!! __('texts.home.banner.cols.right.first') !!}</span>
            <span class="text percentage">{!! __('texts.home.banner.cols.right.second') !!}</span>
            <span class="text">{!! __('texts.home.banner.cols.right.third') !!}</span>
          </div>
        </div>
      </div>

      <a href="#" class="button" title="{{ __('texts.home.banner.button') }} | {{ __('texts.application_name') }}">{{ __('texts.home.banner.button') }}</a>
      <span class="helper">{{ __('texts.home.banner.helper') }}</span>
    </div>
  </section>

  <section class="phone">
    <div class="phone-content">
      <div class="title-container">
        <img class="icon" src="{{asset('/svg/percentage.svg')}}" alt="Percentage | {{ __('texts.application_name') }}" title="Percentage | {{ __('texts.application_name') }}">
        <div class="right">
          <h2 class="title">{!! __('texts.home.phone.title') !!}</h2>
          <span class="helper">{{ __('texts.home.phone.helper') }}</span>
        </div>
      </div>

      <div class="row">
        <div class="col left">
          <div class="group active">
            <img class="icon" src="{{asset('/svg/serve.svg')}}" alt="Serve | {{ __('texts.application_name') }}" title="Serve | {{ __('texts.application_name') }}">
            <h3 class="title">{{ __('texts.home.phone.groups.first.title') }}</h3>
            <span class="helper">{{ __('texts.home.phone.groups.helper') }}</span>
            <span class="dot"></span>
          </div>

          <div class="group">
            <img class="icon" src="{{asset('/svg/flower.svg')}}" alt="Flower | {{ __('texts.application_name') }}" title="Flower | {{ __('texts.application_name') }}">
            <h3 class="title">{{ __('texts.home.phone.groups.second.title') }}</h3>
            <span class="helper">{{ __('texts.home.phone.groups.helper') }}</span>
            <span class="dot"></span>
          </div>

          <div class="group">
            <img class="icon" src="{{asset('/svg/popcorn.svg')}}" alt="Popcorn | {{ __('texts.application_name') }}" title="Popcorn | {{ __('texts.application_name') }}">
            <h3 class="title">{{ __('texts.home.phone.groups.third.title') }}</h3>
            <span class="helper">{{ __('texts.home.phone.groups.helper') }}</span>
            <span class="dot"></span>
          </div>
        </div>

        <div class="col middle">
          <div class="phone-group">
            <img class="top-phone" src="{{asset('images/top-phone.png')}}" alt="Top-Phone | {{ __('texts.application_name') }}" title="Top-Phone | {{ __('texts.application_name') }}">
            <img class="phone-structure" src="{{asset('images/phone.png')}}" alt="Phone | {{ __('texts.application_name') }}" title="Phone | {{ __('texts.application_name') }}">
            <img class="phone-photo" src="{{asset('images/phone-photo.png')}}" alt="Phone | {{ __('texts.application_name') }}" title="Phone | {{ __('texts.application_name') }}">
            <img class="phone-logo" src="{{asset('images/logo-white.png')}}" alt="Logo | {{ __('texts.application_name') }}" title="Logo | {{ __('texts.application_name') }}">
            <a href="#" class="button" title="{{ __('texts.home.phone.button') }} | {{ __('texts.application_name') }}">{{ __('texts.home.phone.button') }}</a>
          </div>
        </div>

        <div class="col right">
          <div class="group">
            <img class="icon" src="{{asset('/svg/dress.svg')}}" alt="Dress | {{ __('texts.application_name') }}" title="Dress | {{ __('texts.application_name') }}">
            <h3 class="title">{{ __('texts.home.phone.groups.fourth.title') }} e beleza</h3>
            <span class="helper">{{ __('texts.home.phone.groups.helper') }}</span>
            <span class="dot"></span>
          </div>

          <div class="group">
            <img class="icon" src="{{asset('/svg/heart.svg')}}" alt="Heart | {{ __('texts.application_name') }}" title="Heart | {{ __('texts.application_name') }}">
            <h3 class="title">{{ __('texts.home.phone.groups.fifth.title') }} e bem estar</h3>
            <span class="helper">{{ __('texts.home.phone.groups.helper') }}</span>
            <span class="dot"></span>
          </div>

          <div class="group">
            <img class="icon" src="{{asset('/svg/technical-support.svg')}}" alt="Technical Ssupport | {{ __('texts.application_name') }}" title="Technical Ssupport | {{ __('texts.application_name') }}">
            <h3 class="title">{{ __('texts.home.phone.groups.sixth.title') }}</h3>
            <span class="helper">{{ __('texts.home.phone.groups.helper') }}</span>
            <span class="dot"></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="conveniados">
    <h2 class="title">{!! __('texts.home.conveniados.title') !!}</h2>

    <div class="glide glide-conveniados">
      <div data-glide-el="track" class="glide__track">
        <ul class="glide__slides">
          @foreach($descontos as $desconto)
          <x-descontoitem :image="$desconto->acf->foto_principal->url" :post-title="$desconto->post_title" :subtitulo="$desconto->subtitulo" :slug="$desconto->slug" :desconto="$desconto->desconto" extra-class="glide__slide" />
          @endforeach
        </ul>
      </div>

      <div data-glide-el="controls" class="glide__controls">
        <button data-glide-dir="<" class="arrow arrow-left"><i data-feather="chevron-left"></i></button>
        <button data-glide-dir=">" class="arrow arrow-right"><i data-feather="chevron-right"></i></button>
      </div>
    </div>
  </section>

  @include('includes.o-clube')

  @include('includes.vantagens')

  <section class="noticias">
    <h2 class="title">{!! __('texts.home.noticias.title') !!}</h2>

    <div class="glide glide-noticias">
      <div data-glide-el="track" class="glide__track">
        <ul class="glide__slides">
          @foreach($posts as $post)
          <x-blogitem :thumbnail="$post->thumbnail ?? null" :post-title="$post->post_title" :slug="$post->slug" :post-date="$post->post_date" extra-class="glide__slide" />
          @endforeach
        </ul>
      </div>

      <div data-glide-el="controls[nav]" class="glide__bullets">
      </div>
    </div>
  </section>

  <section class="calculadora">
    <div class="calculadora-content">
      <div class="left">
        <div class="title-container">
          <img src="{{asset('svg/calculator.svg')}}" alt="{{ __('texts.words.calculator') }} | {{ __('texts.application_name') }}" title="{{ __('texts.words.calculator') }} | {{ __('texts.application_name') }}">
          <h2 class="title">{!! __('texts.home.calculadora.title') !!}</h2>
        </div>

        <h3 class="subtitle">{!! __('texts.home.calculadora.subtitle') !!}</h3>

        <p class="text">{!! __('texts.home.calculadora.text') !!}</p>

        <a href="#" class="button" title="{{ __('texts.home.calculadora.button') }} | {{ __('texts.application_name') }}">{{ __('texts.home.calculadora.button') }}</a>
      </div>

      <div class="right">
        <div class="result-container">
          <span class="result-title">{{ __('texts.home.calculadora.result.title') }}</span>
          <span class="result-text">R$ 999,99</span>
        </div>

        <div class="gasto">
          <span class="gasto-texto">{{ __('texts.home.calculadora.gasto.text') }}</span>
        </div>

        <div class="calculadora-row">
          <div class="title-container">
            <img src="{{asset('svg/fork.svg')}}" alt="{{ __('texts.home.calculadora.gasto.first.title') }} | {{ __('texts.application_name') }}" title="{{ __('texts.home.calculadora.gasto.first.title') }} | {{ __('texts.application_name') }}">
            <h4 class="gasto-title">{{ __('texts.home.calculadora.gasto.first.title') }}</h4>
          </div>

          <label for="restaurante-input" class="calculadora-input-group">
            <span class="symbol">R$:</span>
            <input type="text" class="input" id="restaurante-input">
          </label>
        </div>

        <div class="calculadora-row">
          <div class="title-container">
            <img src="{{asset('svg/gas-station.svg')}}" alt="{{ __('texts.home.calculadora.gasto.second.title') }} | {{ __('texts.application_name') }}" title="{{ __('texts.home.calculadora.gasto.second.title') }} | {{ __('texts.application_name') }}">
            <h4 class="gasto-title">{{ __('texts.home.calculadora.gasto.second.title') }}</h4>
          </div>

          <label for="gasolina-input" class="calculadora-input-group">
            <span class="symbol">R$:</span>
            <input type="text" class="input" id="gasolina-input">
          </label>
        </div>

        <div class="calculadora-row">
          <div class="title-container">
            <img src="{{asset('svg/washing-machine-black.svg')}}" alt="{{ __('texts.home.calculadora.gasto.third.title') }} | {{ __('texts.application_name') }}" title="{{ __('texts.home.calculadora.gasto.third.title') }} | {{ __('texts.application_name') }}">
            <h4 class="gasto-title">{{ __('texts.home.calculadora.gasto.third.title') }}</h4>
          </div>

          <label for="lavanderia-input" class="calculadora-input-group">
            <span class="symbol">R$:</span>
            <input type="text" class="input" id="lavanderia-input">
          </label>
        </div>
      </div>
    </div>
  </section>

  @include('includes.descontos')

</main>
@endsection