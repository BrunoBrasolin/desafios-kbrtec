<nav class="navbar">
  <h1 class="logo">
    <a href="#" class="logo-link">
      <img src="{{supportsWebp() ? asset('images/logo.webp') : asset('images/logo.png')}}" alt="Clube de Assinantes A Tribuna" title="Clube de Assinantes A Tribuna" class="logo-image">
    </a>
  </h1>

  <ul class="navbar-list">
    <li class="navbar-item">
      <a href="#" class="navbar-link">Descontos</a>
    </li>
    <li class="navbar-item">
      <a href="#" class="navbar-link">FAQ</a>
    </li>
    <li class="navbar-item">
      <a href="#" class="navbar-link">Seja Parceiro</a>
    </li>
    <li class="navbar-item">
      <a href="#" class="navbar-link">Sobre</a>
    </li>
    <li class="navbar-item">
      <a href="#" class="navbar-link">Ajuda</a>
    </li>
  </ul>

  <div class="right">
    <div class="button">
      <a href="#" class="button-link">Faça parte do clube</a>
      <span class="button-helper">assine aqui</span>
    </div>

    <div class="signin">
      <span class="icon">
        <img class="icon" src="{{asset('/svg/user.svg')}}" alt="user">
      </span>
      <a href="#" class="signin-link">Entrar</a>
    </div>
  </div>
</nav>