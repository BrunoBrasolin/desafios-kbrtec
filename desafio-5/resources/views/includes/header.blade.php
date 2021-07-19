<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('/css/main.css')}}">
  <title>
    @if(View::hasSection('title'))
      @yield('title') |
    @endif
      Clube de Assinantes A Tribuna
  </title>
</head>

<script src="https://unpkg.com/feather-icons"></script>

<body>

  @include('includes.topbar')

  <header class="header">
    @include('includes/navbar')
  </header>