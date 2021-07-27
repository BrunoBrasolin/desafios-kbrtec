@php
$lang = app()->getLocale();
if($lang == 'en')
$prefix = 'en.';
else if ($lang == 'pt_BR')
$prefix = '';
$route = Request::route() ? Request::route()->getName() ?? null : '';
@endphp

<ol class="breadcrumbs">
  <li class="breadcrumbs__item">
    <a href="{{ route($prefix . 'home') }}" class="breadcrumbs__link">Home</a>
  </li>
  <li class="breadcrumbs__item active">
    <a href="{{ URL::current() }}" class="breadcrumbs__link">
      @if($route == 'blog_integra' || $route == 'en.blog_integra')
      {{ __('texts.blog.title') }}
      @elseif($route == 'descontos_integra' || $route == 'en.descontos_integra')
      {{ __('texts.descontos.title') }}
      @else
      {{ __('texts.' . str_replace('en.', '', $route) . '.title') }}
      @endif
    </a>
  </li>
</ol>