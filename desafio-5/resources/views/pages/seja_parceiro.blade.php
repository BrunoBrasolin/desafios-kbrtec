@extends('layouts.site')

@section('title', 'Seja Parceiro')

@section('content')

<main class="seja_parceiro-page">

  <header class="topbar">
    <h1 class="title">Seja Parceiro</h1>
  </header>


  <section class="content">
    <img src="{{supportsWebp() ? asset('images/seja-parceiro-banner.webp') : asset('images/seja-parceiro-banner.png')}}" alt="" title="" class="background-image">

    <form class="form">
      <h2 class="subtitle">FAÇA O <br /> PRÉ-CADASTRO</h2>

      <div class="input-group">
        <label for="empresa" class="label">Empresa:</label>
        <input type="text" class="input" id="empresa">
      </div>

      <div class="input-row">
        <div class="input-group">
          <label for="responsavel" class="label">Responsável:</label>
          <input type="text" class="input" id="responsavel">
        </div>

        <div class="input-group">
          <label for="telefone" class="label">Telefone:</label>
          <input type="text" class="input" id="telefone">
        </div>
      </div>

      <div class="input-group">
        <label for="email" class="label">E-mail:</label>
        <input type="text" class="input" id="email">
      </div>

      <div class="input-group">
        <label for="mensagem" class="label">Mensagem:</label>
        <textarea id="mensagem" class="input textarea" rows="6"></textarea>
      </div>

      <button type="submit" class="button">Enviar</button>
    </form>
  </section>

</main>

@endsection