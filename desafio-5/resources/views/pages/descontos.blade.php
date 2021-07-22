@extends('layouts.site')

@section('title', 'Descontos')

@section('content')

<main class="descontos-page">
  <header class="topbar">
    <h1 class="title">Descontos</h1>
  </header>

  <div class="content">
    <header class="content__header">
      <h2 class="subtitle">
        estabelecimentos
        <strong class="strong">com descontos</strong>
      </h2>

      <form action="{{route('descontos')}}" class="right form">
        <select class="custom-select descontos-input-group" name="categoria">
          <option value="" selected>Categoria</option>
          @foreach($categories as $category)
          <option value="{{$category->slug}}">{{$category->name}}</option>
          @endforeach
        </select>

        <div class="descontos-input-group">
          <input type="text" name="pesquisa" id="pesquisa" class="input" placeholder="BUSCAR">
          <button type="submit" class="button">
            <i data-feather="search"></i>
          </button>
        </div>
      </form>
    </header>

    <ul class="descontos">
      @foreach($descontos as $desconto)
      <x-descontoitem :post-title="$desconto->post_title" :subtitulo="$desconto->subtitulo" :slug="$desconto->slug" :desconto="$desconto->desconto" />
      <x-descontoitem :post-title="$desconto->post_title" :subtitulo="$desconto->subtitulo" :slug="$desconto->slug" :desconto="$desconto->desconto" />
      <x-descontoitem :post-title="$desconto->post_title" :subtitulo="$desconto->subtitulo" :slug="$desconto->slug" :desconto="$desconto->desconto" />
      <x-descontoitem :post-title="$desconto->post_title" :subtitulo="$desconto->subtitulo" :slug="$desconto->slug" :desconto="$desconto->desconto" />
      <x-descontoitem :post-title="$desconto->post_title" :subtitulo="$desconto->subtitulo" :slug="$desconto->slug" :desconto="$desconto->desconto" />
      <x-descontoitem :post-title="$desconto->post_title" :subtitulo="$desconto->subtitulo" :slug="$desconto->slug" :desconto="$desconto->desconto" />
      <x-descontoitem :post-title="$desconto->post_title" :subtitulo="$desconto->subtitulo" :slug="$desconto->slug" :desconto="$desconto->desconto" />
      <x-descontoitem :post-title="$desconto->post_title" :subtitulo="$desconto->subtitulo" :slug="$desconto->slug" :desconto="$desconto->desconto" />
      <x-descontoitem :post-title="$desconto->post_title" :subtitulo="$desconto->subtitulo" :slug="$desconto->slug" :desconto="$desconto->desconto" />
      <x-descontoitem :post-title="$desconto->post_title" :subtitulo="$desconto->subtitulo" :slug="$desconto->slug" :desconto="$desconto->desconto" />
      @endforeach
    </ul>



</main>

@endsection