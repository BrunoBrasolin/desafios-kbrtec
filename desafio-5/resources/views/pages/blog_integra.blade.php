@php
$lang = app()->getLocale();
if($lang == 'en')
$prefix = 'en.';
else if ($lang == 'pt_BR')
$prefix = '';

$semTraducao = false;

if($lang == 'en')
{
$postTitle = $post->english_title != '' ? $post->english_title : $post->post_title;
if($post->english_content == '') $semTraducao = true;
$postContent = $post->english_content != '' ? $post->english_content : $post->post_content;
}
else if ($lang == 'pt_BR')
{
$postTitle = $post->post_title;
$postContent = $post->post_content;
}

@endphp

@extends('layouts.site')

@section('meta-tag')
<meta property="og:title" content="{{ $postTitle }}" />
<meta property="og:url" content="{{ URL::current() }}" />
<meta property="og:type" content="blog" />
<meta property="og:description" content="{{ \Illuminate\Support\Str::limit(strip_tags($postContent), 150, $end='...') }}" />
<meta property="og:image" content="{{$post->thumbnail}}" />

<meta name="twitter:title" content="{{ $postTitle }}" />
<meta name="twitter:url" content="{{ URL::current() }}" />
<meta name="twitter:image" content="{{$post->thumbnail}}" />
<meta name="twitter:description" content="{{ \Illuminate\Support\Str::limit(strip_tags($postContent), 150, $end='...') }}" />
<meta name="twitter:cart" content="summary" />
@endsection

@section('title', $postTitle)

@section('content')

<main class="blog_integra-page">

  <header class="blog_integra-header">
    @include('includes.breadcrumbs')
    <span class="date">{{ date_format($post->post_date,"d/m/Y") }}</span>
    <h1 class="title">{{ $postTitle }}</h1>
  </header>

  @if($post->thumbnail)
  <figure class="banner-image">
    <img src="{{$post->thumbnail}}" alt="{{$postTitle}} | {{ __('texts.application_name') }}" title="{{$postTitle}} | {{ __('texts.application_name') }}">
  </figure>
  @endif

  <section class="blog_integra-content">
    @if($semTraducao)
    {{ __('texts.blog_integra.sem_traducao') }}
    @else
    {!! $postContent !!}
    @endif

    <section class="share-row">
      <a href="https://www.facebook.com/sharer/sharer.php?u={{ route($prefix . 'blog_integra', $post->slug) }}" class="share-link facebook" target="_blank" title="Facebook | {{ __('texts.application_name') }}">
        <img src="{{asset('svg/facebook-blue.svg')}}" alt="Facebook | {{ __('texts.application_name') }}" title="Facebook | {{ __('texts.application_name') }}">
      </a>
      <a href="https://twitter.com/intent/tweet?text={{ $postTitle }}&url={{ route($prefix . 'blog_integra', $post->slug) }}" class="share-link twitter" target="_blank" title="Twitter | {{ __('texts.application_name') }}">
        <img src="{{asset('svg/twitter.svg')}}" alt="Twitter | {{ __('texts.application_name') }}" title="Twitter | {{ __('texts.application_name') }}">
      </a>
      <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ route($prefix . 'blog_integra', $post->slug )}}" class="share-link linkedin" target="_blank" title="LinkedIn | {{ __('texts.application_name') }}">
        <img src="{{asset('svg/linkedin.svg')}}" alt="LinkedIn | {{ __('texts.application_name') }}" title="LinkedIn | {{ __('texts.application_name') }}">
      </a>

      <span class="texto">{{ __('texts.words.share') }}</span>
    </section>
  </section>

  <section class="leia-mais">
    <hr class="line">
    <h2 class="title">{!! __('texts.blog_integra.leia_mais.title') !!}</h2>

    <div class="leia-mais-posts">
      @foreach($post_leia_mais as $post)
      @php
      if($lang == 'en')
      $postTitle = $post->english_title != '' ? $post->english_title : $post->post_title;
      elseif ($lang == 'pt_BR')
      $postTitle = $post->post_title;
      @endphp
      <x-blogitem :thumbnail="$post->thumbnail ?? null" :post-title="$postTitle" :slug="$post->slug" :post-date="$post->post_date" extra-class="glide__slide" />
      @endforeach
    </div>
  </section>

</main>

@endsection