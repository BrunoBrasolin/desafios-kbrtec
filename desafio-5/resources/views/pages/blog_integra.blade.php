@extends('layouts.site')

@section('title', $post->post_title)

@section('content')

<main class="blog_integra-page">

  <header class="blog_integra-header">
    <span class="date">{{ date_format($post->post_date,"d/m/Y") }}</span>
    <h1>{{ $post->post_title }}</h1>
  </header>

  <figure class="banner-image">
    <img src="{{$post->thumbnail}}" alt="{{$post->post_title}} | Clube de Assinantes A Tribuna" title="{{$post->post_title}} | Clube de Assinantes A Tribuna">
  </figure>

  <section class="blog_integra-content">
    {!! $post->post_content !!}

    <section class="share-row">
      <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('blog_integra', $post->slug) }}" class="share-link facebook" target="_blank">
        <img src="{{asset('svg/facebook-blue.svg')}}" alt="" title="">
      </a>
      <a href="https://twitter.com/intent/tweet?text={{ $post->post_title }}&url={{ route('blog_integra', $post->slug) }}" class="share-link twitter" target="_blank">
        <img src="{{asset('svg/twitter.svg')}}" alt="" title="">
      </a>
      <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ route('blog_integra', $post->slug )}}" class="share-link linkedin" target="_blank">
        <img src="{{asset('svg/linkedin.svg')}}" alt="" title="">
      </a>

      <span class="texto">Compartilhe</span>
    </section>
  </section>

  <section class="leia-mais">
    <hr class="line">
    <h2 class="title">
      leia tabém 
      <strong class="strong">outras notícias</strong>
    </h2>

    <div class="leia-mais-posts">
      @foreach($post_leia_mais as $post)
        <div class="blog-item">
          <figure class="image-container">
            <img src="{{asset($post->thumbnail)}}" alt="alt" title="title">
          </figure>
          <div class="content">
            <span class="date">{{date_format($post->post_date,"d/m/Y")}}</span>
            <h3 class="subtitle">
              <a href="{{route('blog_integra', $post->slug)}}" class="link">
                {{$post->post_title}}
              </a>
            </h3>
            <a href="{{route('blog_integra', $post->slug)}}" class="button">
              <i data-feather="plus"></i>
            </a>
          </div>
        </div>
      @endforeach
    </div>
  </section>

</main>

@endsection