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
        <x-blogitem
          :thumbnail="$post->thumbnail ?? null" 
          :post-title="$post->post_title" 
          :slug="$post->slug" 
          :post-date="$post->post_date" 
          extra-class="glide__slide"
        />
      @endforeach
    </ul>
  </div>
</main>

@endsection