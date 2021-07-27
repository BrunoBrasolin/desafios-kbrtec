@php
$lang = app()->getLocale();
if($lang == 'en')
$prefix = 'en.';
else if ($lang == 'pt_BR')
$prefix = '';
@endphp

<section class="descontos">
  <div class="left">
    <h2 class="title">{!! __('texts.includes.descontos.title') !!}</h2>

    <p class="text">{{ __('texts.includes.descontos.text') }}</p>
  </div>

  <div class="right">
    <div class="glide glide-descontos">
      <div data-glide-el="track" class="glide__track">
        <ul class="glide__slides">
          @foreach( $descontos as $desconto)
          @if($loop->iteration == 1 || $loop->iteration == 6)
          <li class="glide__slide">
            @endif
            <div class="desconto-item">
              <figure class="logo-container">
                <img src="{{$desconto->acf->logo->url}}" alt="{{ $desconto->post_title }} | {{ __('texts.application_name') }}" title="{{ $desconto->post_title }} | {{ __('texts.application_name') }}">
              </figure>
              <p class="desc">{{ __('texts.includes.descontos.item.desc', ['percentage' => $desconto->desconto]) }}</p>
              <a href="{{route($prefix . 'descontos_integra', $desconto->slug)}}" title="{{$desconto->post_title}} | {{ __('texts.application_name') }}" class="stretch-link"></a>
            </div>
            @if($loop->iteration == 6 || $loop->iteration == 12)
          </li>
          @endif
          @endforeach
        </ul>
      </div>
      <div data-glide-el="controls" class="arrows">
        <button data-glide-dir="<" class="arrow arrow-left"><i data-feather="chevron-left"></i></button>
        <button data-glide-dir=">" class="arrow arrow-right"><i data-feather="chevron-right"></i></button>
      </div>
    </div>
  </div>
</section>