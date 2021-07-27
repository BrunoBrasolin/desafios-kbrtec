@php
$lang = app()->getLocale();
if($lang == 'en')
$prefix = 'en.';
else if ($lang == 'pt_BR')
$prefix = '';
@endphp

@extends('layouts.site')

@section('title', __('texts.404.subtitle') )

@section('content')

<main class="404-page">
  <h1 class="title">404</h1>
  <h2 class="subtitle">{{ __('texts.404.subtitle') }}</h2>
  <a href="{{route($prefix . 'home')}}" class="button" title="{{ __('texts.404.button') }} | {{ __('texts.application_name') }}">{{ __('texts.404.button') }}</a>
</main>

@endsection