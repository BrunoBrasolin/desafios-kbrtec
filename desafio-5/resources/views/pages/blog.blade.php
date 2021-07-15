@extends('layouts.site')

@section('title', 'Blog')

@section('content')

<main class="blog-page">
  <header class="topbar">
    <h1 class="title">Blog</h1>
  </header>

  <div class="content">
    <ul class="posts">
      @foreach ($posts as $post)
        <li class="blog-item">
          <figure class="image-container">
            <img src="{{asset('/images/jardinagem.png')}}" alt="alt" title="title">
          </figure>
          <div class="content">
            <span class="date">{{date_format($post->post_date,"d/m/Y")}}</span>
            <h3 class="subtitle">
              <a href="{{$post->permalink}}" class="link">
                {{$post->post_title}}
              </a>
            </h3>
            <a href="#" class="button">
              <i data-feather="plus"></i>
            </a>
          </div>
        </li>
      @endforeach
    </ul>
  </div>
</main>

@endsection