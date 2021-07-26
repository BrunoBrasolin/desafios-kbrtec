<section class="descontos">
  <div class="left">
    <h2 class="title">{!! __('texts.includes.descontos.title') !!}</h2>

    <p class="text">{{ __('texts.includes.descontos.text') }}</p>
  </div>

  <div class="right">
    <div class="glide glide-descontos">
      <div data-glide-el="track" class="glide__track">
        <ul class="glide__slides">
          <li class="glide__slide">
            <div class="desconto-item">
              <figure class="logo-container">
                <img src="{{asset('/images/logos/logo-1.png')}}" alt="alt" title="title">
              </figure>
              <p class="desc">{{ __('texts.includes.descontos.item.desc', ['percentage' => '5']) }}</p>
            </div>
            <div class="desconto-item">
              <figure class="logo-container">
                <img src="{{asset('/images/logos/logo-2.png')}}" alt="alt" title="title">
              </figure>
              <p class="desc">{{ __('texts.includes.descontos.item.desc', ['percentage' => '8']) }}</p>
            </div>
            <div class="desconto-item">
              <figure class="logo-container">
                <img src="{{asset('/images/logos/logo-3.png')}}" alt="alt" title="title">
              </figure>
              <p class="desc">{{ __('texts.includes.descontos.item.desc', ['percentage' => '0']) }}</p>
            </div>
            <div class="desconto-item">
              <figure class="logo-container">
                <img src="{{asset('/images/logos/logo-4.png')}}" alt="alt" title="title">
              </figure>
              <p class="desc">{{ __('texts.includes.descontos.item.desc', ['percentage' => '3']) }}</p>
            </div>
            <div class="desconto-item">
              <figure class="logo-container">
                <img src="{{asset('/images/logos/logo-5.png')}}" alt="alt" title="title">
              </figure>
              <p class="desc">{{ __('texts.includes.descontos.item.desc', ['percentage' => '4']) }}</p>
            </div>
            <div class="desconto-item">
              <figure class="logo-container">
                <img src="{{asset('/images/logos/logo-6.png')}}" alt="alt" title="title">
              </figure>
              <p class="desc">{{ __('texts.includes.descontos.item.desc', ['percentage' => '0']) }}</p>
            </div>
          </li>
          <li class="glide__slide">
            <div class="desconto-item">
              <figure class="logo-container">
                <img src="{{asset('/images/logos/logo-1.png')}}" alt="alt" title="title">
              </figure>
              <p class="desc">{{ __('texts.includes.descontos.item.desc', ['percentage' => '5']) }}</p>
            </div>
            <div class="desconto-item">
              <figure class="logo-container">
                <img src="{{asset('/images/logos/logo-2.png')}}" alt="alt" title="title">
              </figure>
              <p class="desc">{{ __('texts.includes.descontos.item.desc', ['percentage' => '8']) }}</p>
            </div>
            <div class="desconto-item">
              <figure class="logo-container">
                <img src="{{asset('/images/logos/logo-3.png')}}" alt="alt" title="title">
              </figure>
              <p class="desc">{{ __('texts.includes.descontos.item.desc', ['percentage' => '0']) }}</p>
            </div>
            <div class="desconto-item">
              <figure class="logo-container">
                <img src="{{asset('/images/logos/logo-4.png')}}" alt="alt" title="title">
              </figure>
              <p class="desc">{{ __('texts.includes.descontos.item.desc', ['percentage' => '3']) }}</p>
            </div>
            <div class="desconto-item">
              <figure class="logo-container">
                <img src="{{asset('/images/logos/logo-5.png')}}" alt="alt" title="title">
              </figure>
              <p class="desc">{{ __('texts.includes.descontos.item.desc', ['percentage' => '4']) }}</p>
            </div>
            <div class="desconto-item">
              <figure class="logo-container">
                <img src="{{asset('/images/logos/logo-6.png')}}" alt="alt" title="title">
              </figure>
              <p class="desc">{{ __('texts.includes.descontos.item.desc', ['percentage' => '0']) }}</p>
            </div>
          </li>
        </ul>
      </div>
      <div data-glide-el="controls" class="arrows">
        <button data-glide-dir="<" class="arrow arrow-left"><i data-feather="chevron-left"></i></button>
        <button data-glide-dir=">" class="arrow arrow-right"><i data-feather="chevron-right"></i></button>
      </div>
    </div>
  </div>
</section>