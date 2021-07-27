@php
$lang = app()->getLocale();
if($lang == 'en')
$prefix = 'en.';
else if ($lang == 'pt_BR')
$prefix = '';
@endphp

@extends('layouts.site')

@section('title', __('texts.blog.title') )

@section('content')

<main class="blog-page">
  <header class="topbar">
    <h1 class="title">{{ __('texts.blog.title') }}</h1>
  </header>

  <div class="content">
    <header class="content-header">
      <h2 class="subtitle">{{ __('texts.blog.subtitle') }}</h2>

      <form action="{{route($prefix . 'blog')}}" class="right form">
        <label for="pesquisa" class="label">
          <img src="{{asset('svg/filter.svg')}}" alt="Filter | {{ __('texts.application_name') }}" title="Filter | {{ __('texts.application_name') }}">
          {{ __('texts.blog.label') }}
        </label>
        <div class="blog-input-group">
          <input type="text" name="pesquisa" id="pesquisa" class="input">
          <button type="submit" class="button left-line">Ok</button>
        </div>

        <select class="custom-select blog-input-group" name="categoria">
          <option value="" selected>{{ __('texts.words.category') }}</option>
          @foreach($categories as $category)
          <option value="{{$category->slug}}">{{$category->name}}</option>
          @endforeach
        </select>
      </form>
    </header>

    <ul class="posts">
      @foreach ($posts as $post)
      <x-blogitem :thumbnail="$post->thumbnail ?? null" :post-title="$post->post_title" :slug="$post->slug" :post-date="$post->post_date" extra-class="glide__slide" />
      @endforeach
    </ul>

    {{$posts->links('includes.pagination')}}
  </div>

</main>

@endsection