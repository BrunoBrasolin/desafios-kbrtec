@extends('layouts.site')

@section('title', __('texts.faq.title') )

@section('content')

<main class="faq-page">

  <section class="content">
    <div class="content__topbar">
      @include('includes.breadcrumbs')
      <h1 class="title">{{ __('texts.faq.title') }}</h1>
      <h2 class="subtitle">{{ __('texts.faq.subtitle') }}</h2>
    </div>

    <ul class="faq-list">
      @foreach ($faq as $item)
      <li class="faq-item">
        <div class="pergunta-content">
          <h3 class="pergunta">{{$item->pergunta}}</h3>
          <span class="icon">
            <i data-feather="chevron-down"></i>
          </span>
        </div>
        <h4 class="resposta">{{$item->resposta}}</h4>
      </li>
      @endforeach
    </ul>
  </section>

</main>

@endsection