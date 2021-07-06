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
        <img class="icon" src="{{asset('/svg/cutlery.svg')}}" alt="cutlery">

        <div class="texts">
          <span class="text"><b class="price">R$ 100</b> <b class="bold">restaurante</b></span>
          <span class="text percentage"><b class="price">20%</b> Desconto do clube</span>
          <span class="text"><b class="price">= R$ 20</b> de economia</span>
        </div>
      </div>

      <div class="col middle">
        <img class="icon" src="{{asset('/svg/gas-pump.svg')}}" alt="gas-pump">

        <div class="texts">
          <span class="text"><b class="price">R$ 200</b> <b class="bold">gasolina</b></span>
          <span class="text percentage"><b class="price">5%</b> Desconto do clube</span>
          <span class="text"><b class="price">= R$ 10</b> de economia</span>
        </div>
      </div>

      <div class="col right">
        <img class="icon" src="{{asset('/svg/washing-machine.svg')}}" alt="washing-machine">

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

  <section class="phone">
    <div class="phone-content">
      <div class="title-container">
        <img class="icon" src="{{asset('/svg/percentage.svg')}}" alt="percentage">
        <div class="right">
          <h2 class="title">
            Tenha acesso à
            <strong class="strong">descontos exclusivos</strong>
          </h2>
          <span class="helper">Conheça as categorias</span>
        </div>
      </div>

      <div class="row">
        <div class="col left">
          <div class="group active">
            <img class="icon" src="{{asset('/svg/serve.svg')}}" alt="serve">
            <h3 class="title">Grastronomia</h3>
            <span class="helper">Conheça os descontos</span>
            <span class="dot"></span>
          </div>

          <div class="group">
            <img class="icon" src="{{asset('/svg/flower.svg')}}" alt="flower">
            <h3 class="title">casa e decoração</h3>
            <span class="helper">Conheça os descontos</span>
            <span class="dot"></span>
          </div>

          <div class="group">
            <img class="icon" src="{{asset('/svg/popcorn.svg')}}" alt="popcorn">
            <h3 class="title">entretenimento</h3>
            <span class="helper">Conheça os descontos</span>
            <span class="dot"></span>
          </div>
        </div>

        <div class="col middle">
          <div class="phone-group">
            <img class="top-phone" src="{{asset('images/top-phone.png')}}" alt="Top-Phone">
            <img class="phone-structure" src="{{asset('images/phone.png')}}" alt="Phone">
            <img class="phone-photo" src="{{asset('images/phone-photo.png')}}" alt="Phone">
            <img class="phone-logo" src="{{asset('images/logo-white.png')}}" alt="Logo">
            <a href="#" class="button">Faça parte do clube</a>
          </div>
        </div>

        <div class="col right">
          <div class="group">
            <img class="icon" src="{{asset('/svg/dress.svg')}}" alt="dress">
            <h3 class="title">moda e beleza</h3>
            <span class="helper">Conheça os descontos</span>
            <span class="dot"></span>
          </div>

          <div class="group">
            <img class="icon" src="{{asset('/svg/heart.svg')}}" alt="heart">
            <h3 class="title">Saúde e bem estar</h3>
            <span class="helper">Conheça os descontos</span>
            <span class="dot"></span>
          </div>

          <div class="group">
            <img class="icon" src="{{asset('/svg/technical-support.svg')}}" alt="technical-support">
            <h3 class="title">Serviços</h3>
            <span class="helper">Conheça os descontos</span>
            <span class="dot"></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="conveniados">
    <h2 class="title">
      estabelecimentos
      <strong class="strong">Conveniados</strong>
    </h2>

    <div class="glide">
      <div data-glide-el="track" class="glide__track">
        <ul class="glide__slides">
          <li class="glide__slide">
            <figure class="image-contaienr">
              <img src="{{asset('/images/o-made-cozinha.jpg')}}" alt="alt" title="title">
              <span class="percentage">10%</span>
            </figure>
            <h3 class="subtitle">Madê Cozinha autoral</h3>
            <p class="desc">Um restaurante simples, requintado e com muito sabore qualidade.</p>
          </li>

          <li class="glide__slide">
            <figure class="image-contaienr">
              <img src="{{asset('/images/o-made-cozinha.jpg')}}" alt="alt" title="title">
              <span class="percentage">10%</span>
            </figure>
            <h3 class="subtitle">Madê Cozinha autoral</h3>
            <p class="desc">Um restaurante simples, requintado e com muito sabore qualidade.</p>
          </li>

          <li class="glide__slide">
            <figure class="image-contaienr">
              <img src="{{asset('/images/o-made-cozinha.jpg')}}" alt="alt" title="title">
              <span class="percentage">10%</span>
            </figure>
            <h3 class="subtitle">Madê Cozinha autoral</h3>
            <p class="desc">Um restaurante simples, requintado e com muito sabore qualidade.</p>
          </li>

          <li class="glide__slide">
            <figure class="image-contaienr">
              <img src="{{asset('/images/o-made-cozinha.jpg')}}" alt="alt" title="title">
              <span class="percentage">10%</span>
            </figure>
            <h3 class="subtitle">Madê Cozinha autoral</h3>
            <p class="desc">Um restaurante simples, requintado e com muito sabore qualidade.</p>
          </li>

          <li class="glide__slide">
            <figure class="image-contaienr">
              <img src="{{asset('/images/o-made-cozinha.jpg')}}" alt="alt" title="title">
              <span class="percentage">10%</span>
            </figure>
            <h3 class="subtitle">Madê Cozinha autoral</h3>
            <p class="desc">Um restaurante simples, requintado e com muito sabore qualidade.</p>
          </li>

          <li class="glide__slide">
            <figure class="image-contaienr">
              <img src="{{asset('/images/o-made-cozinha.jpg')}}" alt="alt" title="title">
              <span class="percentage">10%</span>
            </figure>
            <h3 class="subtitle">Madê Cozinha autoral</h3>
            <p class="desc">Um restaurante simples, requintado e com muito sabore qualidade.</p>
          </li>
        </ul>
      </div>
      <div data-glide-el="controls">
        <button data-glide-dir="<" class="arrow arrow-left"><i data-feather="chevron-left"></i></button>
        <button data-glide-dir=">" class="arrow arrow-right"><i data-feather="chevron-right"></i></button>
      </div>
    </div>
  </section>
</main>
@endsection