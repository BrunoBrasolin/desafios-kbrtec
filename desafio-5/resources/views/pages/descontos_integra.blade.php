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
        <p class="endereco">{{$desconto->logradouro}} - {{$desconto->bairro}}/{{$desconto->estado}}, <span class="cep">{{$desconto->cep}}</span></p>
        <h3 class="right__title">Fale conosco</h3>
        <a href="https://api.whatsapp.com/send?phone={{$desconto->whatsapp}}" class="link whatsapp">
          <img src="{{asset('svg/whatsapp-green.svg')}}" alt="" title="">
          {{$desconto->whatsapp}}
        </a>
        <a href="tel:{{$desconto->telefone}}" class="link telefone">
          <img src="{{asset('svg/phone-call-purple.svg')}}" alt="" title="">
          {{$desconto->telefone}}
        </a>
        <a href="mailto:{{$desconto->email}}" class="link email">{{$desconto->email}}</a>
        <a href="mailto:{{$desconto->site}}" class="link site">{{$desconto->site}}</a>
      </div>
    </section>
  </section>
</main>

@endsection