@php
$lang = app()->getLocale();
if($lang == 'en')
$prefix = 'en.';
else if ($lang == 'pt_BR')
$prefix = '';
@endphp

<li class="{{$extra_class}} desconto-item">
    <figure class="image-contaienr">
        <img src="{{$image}}" alt="{{$post_title}} | {{ __('texts.application_name') }}" title="{{$post_title}} | {{ __('texts.application_name') }}">
        <span class="percentage">{{$desconto}}%</span>
    </figure>
    <h3 class="subtitle">{{$post_title}}</h3>
    <p class="desc">{{$subtitulo}}</p>

    <span class="button">
        <i data-feather="plus"></i>
    </span>

    <a href="{{route($prefix . 'descontos_integra', $slug)}}" title="{{$post_title}} | {{ __('texts.application_name') }}" class="stretch-link"></a>
</li>