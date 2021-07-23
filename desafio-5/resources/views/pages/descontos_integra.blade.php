@extends('layouts.site')

@section('title', $desconto->post_title)

@section('content')

<main class="descontos_integra-page">
  <header class="topbar">
    <h1 class="title">Descontos</h1>
  </header>

  <section class="content">
    <header class="content__header">
      <div class="left">
        <img src="http://ambiente-desenvolvimento.provisorio.ws/bruno-brasolin/desafio-5/painel/wp-content/uploads/2021/07/image-14.png" alt="">

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
          de desconto
        </h3>

        <a href="{{URL::previous()}}" class="button">Voltar</a>
      </div>
    </header>

    <p class="descricao">{!! $desconto->descricao !!}</p>

    <section class="content__bottom">
      <div class="left">
        @if($desconto->regras)
        <h3 class="left__title">Regras de uso</h3>
        {!! $desconto->regras !!}
        @endif

        <a href="#" class="button">Para acessar o cupom Clique aqui</a>
      </div>

      <div class="right">
        <h3 class="right__title">Onde estamos</h3>
        <a href="https://goo.gl/maps/GN6iQocZyDGgisH6A" target="_blank" class="endereco">{{$desconto->logradouro}} - {{$desconto->bairro}}/{{$desconto->estado}}, <span class="cep">{{$desconto->cep}}</span></a>
        <h3 class="right__title">Fale conosco</h3>
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
          <span class="text">#acompanhe-nos</span>
        </div>
      </div>
    </section>
  </section>
</main>

@endsection