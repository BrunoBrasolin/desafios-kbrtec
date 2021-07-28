@php
$lang = app()->getLocale();
$route = Request::route() ? Request::route()->getName() ?? null : '';
@endphp

<section class="topbar">
  <div class="topbar-content">
    <span class="weather">
      <span class="weather-min">x</span>° | <span class="weather-max">x</span>° {{ __('texts.words.weather') }}
    </span>

    <div class="social-container">
      @if($lang == 'pt_BR')
        @if($route == 'descontos_integra')
          <a href="{{ route("en." . $route, $desconto->slug) }}" class="translate"><img src="{{asset('svg/eua.svg')}}" alt="English | {{ __('application_name') }}" title="English | {{ __('application_name') }}"></a>
        @elseif($route == 'blog_integra')
          <a href="{{ route("en." . $route, $post->slug) }}" class="translate"><img src="{{asset('svg/eua.svg')}}" alt="English | {{ __('application_name') }}" title="English | {{ __('application_name') }}"></a>
        @else
          <a href="{{ route("en." . $route) }}" class="translate"><img src="{{asset('svg/eua.svg')}}" alt="English | {{ __('application_name') }}" title="English | {{ __('application_name') }}"></a>
        @endif
      @elseif ($lang == 'en')
        @if($route == 'en.descontos_integra')
          <a href="{{ route(str_replace('en.', '',$route), $desconto->slug) }}" class="translate"><img src="{{asset('svg/brazil.svg')}}" alt="English | {{ __('application_name') }}" title="English | {{ __('application_name') }}"></a>
        @elseif($route == 'en.blog_integra')
          <a href="{{ route(str_replace('en.', '',$route), $post->slug) }}" class="translate"><img src="{{asset('svg/brazil.svg')}}" alt="English | {{ __('application_name') }}" title="English | {{ __('application_name') }}"></a>
        @else
          <a href="{{ route(str_replace('en.', '',$route)) }}" class="translate"><img src="{{asset('svg/brazil.svg')}}" alt="Português | {{ __('application_name') }}" title="Português | {{ __('application_name') }}" title=""></a>
        @endif
      @endif
      <a href="{{env('FACEBOOK_LINK') ?? '#'}}" class="social-link" title="Facebook | {{ __('texts.application_name') }}">
        <img class="icon" src="{{asset('/svg/facebook.svg')}}" alt="Facebook | {{ __('texts.application_name') }}" title="Facebook | {{ __('texts.application_name') }}">
      </a>
      <a href="{{env('INSTAGRAM_LINK') ?? '#'}}" class="social-link" title="Instagram | {{ __('texts.application_name') }}">
        <img class="icon" src="{{asset('/svg/instagram.svg')}}" alt="Instagram | {{ __('texts.application_name') }}" title="Instagram | {{ __('texts.application_name') }}">
      </a>
    </div>
  </div>
</section>