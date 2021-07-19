@extends('layouts.site')


@section('content')

<main class="home-page">
  <section class="banner">
    <img src="{{supportsWebp() ? asset('images/banner.webp') : asset('images/banner.png')}}" alt="Clube de Assinantes A Tribuna" title="Clube de Assinantes A Tribuna" class="banner-image">
    <div class="banner-content">
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
    </div>
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

    <div class="glide glide-conveniados">
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
      <div data-glide-el="controls" class="glide__controls">
        <button data-glide-dir="<" class="arrow arrow-left"><i data-feather="chevron-left"></i></button>
        <button data-glide-dir=">" class="arrow arrow-right"><i data-feather="chevron-right"></i></button>
      </div>
    </div>
  </section>

  @include('includes.o-clube-vantagens')

  <section class="noticias">
    <h2 class="title">
      ùltimas notícias
      <strong class="strong">Acompanhe as novidades </strong>
    </h2>


    <div class="glide glide-noticias">
      <div data-glide-el="track" class="glide__track">
        <ul class="glide__slides">
          @foreach($posts as $post)
          <li class="glide__slide blog-item">
            <figure class="image-container">
              <img src="{{asset($post->thumbnail)}}" alt="alt" title="title">
            </figure>
            <div class="content">
              <span class="date">{{date_format($post->post_date,"d/m/Y")}}</span>
              <h3 class="subtitle">
                <a href="{{route('blog_integra', $post->slug)}}" class="link">
                  {{$post->post_title}}
                </a>
              </h3>

              <a href="{{route('blog_integra', $post->slug)}}" class="button">
                <i data-feather="plus"></i>
              </a>
            </div>
          </li>
          @endforeach
        </ul>
      </div>

      <div data-glide-el="controls[nav]" class="glide__bullets">
        <button data-glide-dir="=0" class="glide__bullet"></button>
        <button data-glide-dir="=1" class="glide__bullet"></button>
        <button data-glide-dir="=2" class="glide__bullet"></button>
      </div>
    </div>
  </section>

  <section class="calculadora">
    <div class="calculadora-content">
      <div class="left">
        <div class="title-container">
          <img src="{{asset('svg/calculator.svg')}}" alt="Calculadora de Economia Clube A Tribuna" title="Calculadora de Economia Clube A Tribuna">
          <h2 class="title">Calculadora de Economia <strong class="strong">Clube A Tribuna</strong></h2>
        </div>

        <h3 class="subtitle">
          Saiba quanto você pode
          <strong class="strong">economizar em seu dia-a-dia</strong>
          fazendo parte do Clube A Tribuna!
        </h3>

        <p class="text">
          Os valores apresentados tratam-se de estimativas, com base na porcentagem de desconto oferecida aos
          <strong class="strong">assinantes do Clube A Tribuna</strong>.
        </p>

        <a href="#" class="button">Assine agora!</a>
      </div>

      <div class="right">
        <div class="result-container">
          <span class="result-title">VOCÊ ECONOMIZARÁ:</span>
          <span class="result-text">R$ 999,99</span>
        </div>

        <div class="gasto">
          <span class="gasto-texto">Durante um mês, qual o valor que você gasta com:</span>
        </div>

        <div class="calculadora-row">
          <div class="title-container">
            <img src="{{asset('svg/fork.svg')}}" alt="" title="">
            <h4 class="gasto-title">Idas ao restaurante?</h4>
          </div>

          <label for="restaurante-input" class="calculadora-input-group">
            <span class="symbol">R$:</span>
            <input type="text" class="input" id="restaurante-input">
          </label>
        </div>

        <div class="calculadora-row">
          <div class="title-container">
            <img src="{{asset('svg/gas-station.svg')}}" alt="" title="">
            <h4 class="gasto-title">Abastecimento de veículos com gasolina?</h4>
          </div>

          <label for="gasolina-input" class="calculadora-input-group">
            <span class="symbol">R$:</span>
            <input type="text" class="input" id="gasolina-input">
          </label>
        </div>

        <div class="calculadora-row">
          <div class="title-container">
            <img src="{{asset('svg/washing-machine-black.svg')}}" alt="" title="">
            <h4 class="gasto-title">Utilização de serviços de lavanderia?</h4>
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