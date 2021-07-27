@php
$lang = app()->getLocale();
if($lang == 'en')
$prefix = 'en.';
else if ($lang == 'pt_BR')
$prefix = '';
@endphp

<li class="{{$extra_class}} blog-item">
    @if($thumbnail)
    <figure class="image-container">
        <img src="{{asset($thumbnail)}}" alt="{{$post_title}} | {{ __('texts.application_name') }}" title="{{$post_title}} | {{ __('texts.application_name') }}">
    </figure>
    @else
    <div class="fake-image">
        <span class="fake-image__text">{{$post_title}}</span>
    </div>
    @endif
    <div class="content">
        <span class="date">{{date_format($post_date,"d/m/Y")}}</span>
        <h3 class="subtitle">
            <a href="{{route($prefix . 'blog_integra', $slug)}}" class="link" title="{{$post_title}} | {{ __('texts.application_name') }}">
                {{$post_title}}
            </a>
        </h3>

        <a href="{{route($prefix . 'blog_integra', $slug)}}" class="button" title="{{$post_title}} | {{ __('texts.application_name') }}">
            <i data-feather="plus"></i>
        </a>
    </div>
</li>