@extends('layouts.site')

@section('title', 'Blog')

@section('content')

<main class="blog-page">
  <header class="topbar">
    <h1 class="title">Blog</h1>
  </header>

  <div class="content">
    <header class="content-header">
      <h2 class="subtitle">Acompanhe as notícias do clube</h2>

      <form action="{{route('blog')}}" class="right form">
        <label for="pesquisa" class="label">
          <img src="{{asset('svg/filter.svg')}}" alt="" title="">
          O que você procura?
        </label>
        <div class="blog-input-group">
          <input type="text" name="pesquisa" id="pesquisa" class="input">
          <button type="submit" class="button left-line">Ok</button>
        </div>

        <select class="custom-select blog-input-group" name="categoria">
          <option value="" selected>Categoria</option>
          @foreach($categories as $category)
            <option value="{{$category->slug}}">{{$category->name}}</option>
          @endforeach
        </select>
      </form>
    </header>

    <ul class="posts">
      @foreach ($posts as $post)
        <li class="blog-item">
          <figure class="image-container">
            <img src="{{asset($post->thumbnail)}}" alt="alt" title="title">
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