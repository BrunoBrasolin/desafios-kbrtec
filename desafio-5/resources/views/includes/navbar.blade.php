@php
$route = Request::route() ? Request::route()->getName() ?? null : '';
$lang = app()->getLocale();
if($lang == 'en')
$prefix = 'en.';
else if ($lang == 'pt_BR')
$prefix = '';
@endphp

<nav class="navbar">
  <div class="mobile-row">
    <h1 class="logo">
      <a href="{{route($prefix . 'home')}}" class="logo-link" title="{{ __('texts.application_name') }}">
        <img src="{{supportsWebp() ? asset('images/logo.webp') : asset('images/logo.png')}}" alt="{{ __('texts.application_name') }}" title="{{ __('texts.application_name') }}" class="logo-image">
      </a>
    </h1>

    <span class="icon">
      <i data-feather="menu"></i>
    </span>
  </div>

  <ul class="navbar-list">
    <li class="navbar-item">
      <a href="{{route($prefix . 'descontos')}}" class="navbar-link {{$route === 'descontos' ? 'active' : ''}}" title="{{ __('texts.includes.navbar.descontos') }} | {{ __('texts.application_name') }}">{{ __('texts.includes.navbar.descontos') }}</a>
    </li>
    <li class="navbar-item">
      <a href="{{route($prefix . 'faq')}}" class="navbar-link {{$route === 'faq' ? 'active' : ''}}" title="{{ __('texts.includes.navbar.faq') }} | {{ __('texts.application_name') }}">{{ __('texts.includes.navbar.faq') }}</a>
    </li>
    <li class="navbar-item">
      <a href="{{route($prefix . 'seja_parceiro')}}" class="navbar-link {{$route === 'seja_parceiro' ? 'active' : ''}}" title="{{ __('texts.includes.navbar.seja_parceiro') }} | {{ __('texts.application_name') }}">{{ __('texts.includes.navbar.seja_parceiro') }}</a>
    </li>
    <li class="navbar-item">
      <a href="{{route($prefix . 'sobre')}}" class="navbar-link {{$route === 'sobre' ? 'active' : ''}}" title="{{ __('texts.includes.navbar.sobre') }} | {{ __('texts.application_name') }}">{{ __('texts.includes.navbar.sobre') }}</a>
    </li>
    <li class="navbar-item">
      <a href="{{route($prefix . 'contato')}}" class="navbar-link {{$route === 'contato' ? 'active' : ''}}" title="{{ __('texts.includes.navbar.contato') }} | {{ __('texts.application_name') }}">{{ __('texts.includes.navbar.contato') }}</a>
    </li>
    <li class="navbar-item">
      <a href="{{route($prefix . 'blog')}}" class="navbar-link {{$route === 'blog' ? 'active' : ''}}" title="{{ __('texts.includes.navbar.blog') }} | {{ __('texts.application_name') }}">{{ __('texts.includes.navbar.blog') }}</a>
    </li>
  </ul>

  <div class="right">
    <div class="button">
      <a href="#" class="button-link" title="{{ __('texts.includes.navbar.button.link') }} | {{ __('texts.application_name') }}">{{ __('texts.includes.navbar.button.link') }}</a>
      <span class="button-helper">{{ __('texts.includes.navbar.button.helper') }}</span>
    </div>

    <div class="signin">
      <span class="icon-container">
        <img class="icon" src="{{asset('/svg/user.svg')}}" alt="User | {{ __('texts.application_name') }}" title="User | {{ __('texts.application_name') }}">
      </span>
      <a href="#" class="signin-link" title="{{ __('texts.words.signin') }} | {{ __('texts.application_name') }}">{{ __('texts.words.signin') }}</a>
    </div>
  </div>
</nav>