<nav class="navbar">
  <div class="mobile-row">
    <h1 class="logo">
      <a href="{{route('home')}}" class="logo-link">
        <img src="{{supportsWebp() ? asset('images/logo.webp') : asset('images/logo.png')}}" alt="Clube de Assinantes A Tribuna" title="Clube de Assinantes A Tribuna" class="logo-image">
      </a>
    </h1>

    <span class="icon">
      <i data-feather="menu"></i>
    </span>
  </div>

  <ul class="navbar-list">
    <li class="navbar-item">
      <a href="{{ route('descontos') }}" class="navbar-link {{\Request::route()->getName() === 'descontos' ? 'active' : ''}}">Descontos</a>
    </li>
    <li class="navbar-item">
      <a href="{{route('faq')}}" class="navbar-link {{\Request::route()->getName() === 'faq' ? 'active' : ''}}">FAQ</a>
    </li>
    <li class="navbar-item">
      <a href="{{route('seja_parceiro')}}" class="navbar-link {{\Request::route()->getName() === 'seja_parceiro' ? 'active' : ''}}">Seja Parceiro</a>
    </li>
    <li class="navbar-item">
      <a href="{{route('sobre')}}" class="navbar-link {{\Request::route()->getName() === 'sobre' ? 'active' : ''}}">Sobre</a>
    </li>
    <li class="navbar-item">
      <a href="{{route('contato')}}" class="navbar-link {{\Request::route()->getName() === 'contato' ? 'active' : ''}}">Contato</a>
    </li>
    <li class="navbar-item">
      <a href="{{route('blog')}}" class="navbar-link {{\Request::route()->getName() === 'blog' ? 'active' : ''}}">Blog</a>
    </li>
  </ul>

  <div class="right">
    <div class="button">
      <a href="#" class="button-link">Faça parte do clube</a>
      <span class="button-helper">assine aqui</span>
    </div>

    <div class="signin">
      <span class="icon-container">
        <img class="icon" src="{{asset('/svg/user.svg')}}" alt="user">
      </span>
      <a href="#" class="signin-link">Entrar</a>
    </div>
  </div>
</nav>