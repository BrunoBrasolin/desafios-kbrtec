@php
$lang = app()->getLocale();
if($lang == 'en')
$prefix = 'en.';
else if ($lang == 'pt_BR')
$prefix = '';
@endphp

<li class="{{$extra_class}} blog-item">
    <a href="{{route($prefix . 'blog_integra', $slug)}}" title="{{$post_title}} | {{ __('texts.application_name') }}">
        @if($thumbnail)
        <figure class="image-container">
            <img src="{{asset($thumbnail)}}" alt="{{$post_title}} | {{ __('texts.application_name') }}" title="{{$post_title}} | {{ __('texts.application_name') }}">
        </figure>
        @else
        <div class="fake-image">
            <span class="fake-image__text">{{$post_title}}</span>
        </div>
        @endif
    </a>

    <div class="content">
        <span class="date">{{date_format($post_date,"d/m/Y")}}</span>
        <h3 class="subtitle">
            {{$post_title}}
        </h3>

        <span class="button">

            <i data-feather="plus"></i>
        </span>

        <a href="{{route($prefix . 'blog_integra', $slug)}}" title="{{$post_title}} | {{ __('texts.application_name') }}" class="stretch-link"></a>
    </div>
</li>