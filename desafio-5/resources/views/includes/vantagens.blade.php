<section class="vantagens">
  <div class="top">
    <div class="top-content">
      <img src="{{asset('svg/checklists.svg')}}" alt="" title="">
      <h2 class="title">{!! __('texts.includes.vantagens.title') !!}</h2>
    </div>
  </div>

  <div class="vantagens-content">
    <div class="left">
      <div class="group">
        <div class="title-container">
          <img src="{{asset('svg/calendar.svg')}}" alt="{{ __('texts.includes.vantagens.groups.events.subtitle') }} | {{ __('texts.application_name') }}" title="{{ __('texts.includes.vantagens.groups.events.subtitle') }} | {{ __('texts.application_name') }}">
          <h3 class="subtitle">{{ __('texts.includes.vantagens.groups.events.subtitle') }}</h3>
        </div>
        <p class="desc">{{ __('texts.includes.vantagens.groups.events.desc') }}</p>
      </div>

      <div class="group">
        <div class="title-container">
          <img src="{{asset('svg/speaker.svg')}}" alt="{{ __('texts.includes.vantagens.groups.information.subtitle') }} | {{ __('texts.application_name') }}" title="{{ __('texts.includes.vantagens.groups.information.subtitle') }} | {{ __('texts.application_name') }}">
          <h3 class="subtitle">{{ __('texts.includes.vantagens.groups.information.subtitle') }}</h3>
        </div>
        <p class="desc">{{ __('texts.includes.vantagens.groups.information.desc') }}</p>
      </div>

      <div class="group">
        <div class="title-container">
          <img src="{{asset('svg/digital.svg')}}" alt="{{ __('texts.includes.vantagens.groups.digital.subtitle') }} | {{ __('texts.application_name') }}" title="{{ __('texts.includes.vantagens.groups.digital.subtitle') }} | {{ __('texts.application_name') }}">
          <h3 class="subtitle">{{ __('texts.includes.vantagens.groups.digital.subtitle') }}</h3>
        </div>
        <p class="desc">{{ __('texts.includes.vantagens.groups.digital.desc') }}</p>
      </div>

      <a href="#" class="button" title="{{ __('texts.includes.vantagens.button') }} | {{ __('texts.application_name') }}">{{ __('texts.includes.vantagens.button') }}</a>
    </div>

    <div class="right">
      <img src="{{asset('images/vantagem-image.png')}}" alt="{{ __('texts.words.advantages') }} | {{ __('texts.application_name') }}" title="{{ __('texts.words.advantages') }} | {{ __('texts.application_name') }}">
    </div>
  </div>
</section>