@php
$lang = app()->getLocale();
if($lang == 'en')
$prefix = 'en.';
else if ($lang == 'pt_BR')
$prefix = '';
@endphp

@extends('layouts.site')

@section('title', __('texts.descontos.title') )

@section('content')

<main class="descontos-page">
  <header class="topbar">
    @include('includes.breadcrumbs')
    <h1 class="title">{{ __('texts.descontos.title') }}</h1>
  </header>

  <section class="content">
    <header class="content__header">
      <h2 class="subtitle">{!! __('texts.descontos.subtitle') !!}</h2>

      <form action="{{route($prefix . 'descontos')}}" class="right form">
        <select class="custom-select descontos-input-group" name="categoria">
          <option value="" selected>{{ __('texts.words.category') }}</option>
          @foreach($categories as $category)
          <option value="{{$category->slug}}">{{$category->name}}</option>
          @endforeach
        </select>

        <div class="descontos-input-group">
          <input type="text" name="pesquisa" id="pesquisa" class="input" placeholder="{{ __('texts.words.search') }}">
          <button type="submit" class="button">
            <i data-feather="search"></i>
          </button>
        </div>
      </form>
    </header>

    <ul class="descontos">
      @foreach($descontos as $desconto)
      <x-descontoitem :image="$desconto->acf->foto_principal->url" :post-title="$desconto->post_title" :subtitulo="$desconto->subtitulo" :slug="$desconto->slug" :desconto="$desconto->desconto" />
      @endforeach
    </ul>

    {{$descontos->links('includes.pagination')}}

</main>

@endsection