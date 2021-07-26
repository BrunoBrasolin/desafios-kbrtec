@extends('layouts.site')

@section('title', $post->post_title)

@section('content')

<main class="blog_integra-page">

  <header class="blog_integra-header">
    <span class="date">{{ date_format($post->post_date,"d/m/Y") }}</span>
    <h1>{{ $post->post_title }}</h1>
  </header>

  <figure class="banner-image">
    <img src="{{$post->thumbnail}}" alt="{{$post->post_title}} | {{ __('texts.application_name') }}" title="{{$post->post_title}} | {{ __('texts.application_name') }}">
  </figure>

  <section class="blog_integra-content">
    {!! $post->post_content !!}

    <section class="share-row">
      <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('blog_integra', $post->slug) }}" class="share-link facebook" target="_blank" title="Facebook | {{ __('texts.application_name') }}">
        <img src="{{asset('svg/facebook-blue.svg')}}" alt="Facebook | {{ __('texts.application_name') }}" title="Facebook | {{ __('texts.application_name') }}">
      </a>
      <a href="https://twitter.com/intent/tweet?text={{ $post->post_title }}&url={{ route('blog_integra', $post->slug) }}" class="share-link twitter" target="_blank" title="Twitter | {{ __('texts.application_name') }}">
        <img src="{{asset('svg/twitter.svg')}}" alt="Twitter | {{ __('texts.application_name') }}" title="Twitter | {{ __('texts.application_name') }}">
      </a>
      <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ route('blog_integra', $post->slug )}}" class="share-link linkedin" target="_blank" title="LinkedIn | {{ __('texts.application_name') }}">
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
      <x-blogitem :thumbnail="$post->thumbnail ?? null" :post-title="$post->post_title" :slug="$post->slug" :post-date="$post->post_date" extra-class="glide__slide" />
      @endforeach
    </div>
  </section>

</main>

@endsection