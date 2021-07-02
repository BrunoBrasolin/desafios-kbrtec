@extends('layouts.site')

@section('title', 'Home')

@section('content')

<main class="home-page">

  <section class="banner">
    <img src="{{supportsWebp() ? asset('images/banner.webp') : asset('images/banner.png')}}" alt="Clube de Assinantes A Tribuna" title="Clube de Assinantes A Tribuna" class="banner-image">
    <h2 class="title">O Maior clube de vantagens da região</h2>
    <h3 class="subtitle">Com o que você <span class="line">gasta</span> no mês?</h3>

    <div class="row">
      <div class="col left">
        @svg('cutlery')

        <div class="texts">
          <span class="text"><b class="price">R$ 100</b> <b class="bold">restaurante</b></span>
          <span class="text percentage"><b class="price">20%</b> Desconto do clube</span>
          <span class="text"><b class="price">= R$ 20</b> de economia</span>
        </div>
      </div>

      <div class="col middle">
        @svg('gas-pump')

        <div class="texts">
          <span class="text"><b class="price">R$ 200</b> <b class="bold">gasolina</b></span>
          <span class="text percentage"><b class="price">5%</b> Desconto do clube</span>
          <span class="text"><b class="price">= R$ 10</b> de economia</span>
        </div>
      </div>

      <div class="col right">
        @svg('washing-machine')

        <div class="texts">
          <span class="text"><b class="price">R$ 100</b> <b class="bold">lavanderia</b></span>
          <span class="text percentage"><b class="price">20%</b> Desconto do clube</span>
          <span class="text"><b class="price">= R$ 20</b> de economia</span>
        </div>
      </div>
    </div>

    <a href="#" class="button">clique aqui e Faça parte do clube</a>
    <span class="helper">Sua economia pode pagar a sua Assinatura!</span>

  </section>
</main>
@endsection