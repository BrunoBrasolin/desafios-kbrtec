@extends('layouts.site')

@section('title', 'FAQ')

@section('content')

<main class="faq-page">

  <section class="content">
    <h1 class="title">FAQ</h1>
    <h2 class="subtitle">DÚVIDAS FREQUENTES</h2>

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