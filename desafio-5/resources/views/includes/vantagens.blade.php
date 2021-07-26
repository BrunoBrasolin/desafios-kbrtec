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
          <img src="{{asset('svg/calendar.svg')}}" alt="Acesso exclusivo a eventos | Clube de Assinantes A Tribuna" title="Acesso exclusivo a eventos | Clube de Assinantes A Tribuna">
          <h3 class="subtitle">{{ __('texts.includes.vantagens.groups.events.subtitle') }}</h3>
        </div>
        <p class="desc">{{ __('texts.includes.vantagens.groups.events.desc') }}</p>
      </div>

      <div class="group">
        <div class="title-container">
          <img src="{{asset('svg/speaker.svg')}}" alt="Informação a toda hora | Clube de Assinantes A Tribuna" title="Informação a toda hora | Clube de Assinantes A Tribuna">
          <h3 class="subtitle">{{ __('texts.includes.vantagens.groups.information.subtitle') }}</h3>
        </div>
        <p class="desc">{{ __('texts.includes.vantagens.groups.information.desc') }}</p>
      </div>

      <div class="group">
        <div class="title-container">
          <img src="{{asset('svg/digital.svg')}}" alt="Plataforma digital | Clube de Assinantes A Tribuna" title="Plataforma digital | Clube de Assinantes A Tribuna">
          <h3 class="subtitle">{{ __('texts.includes.vantagens.groups.digital.subtitle') }}</h3>
        </div>
        <p class="desc">{{ __('texts.includes.vantagens.groups.digital.desc') }}</p>
      </div>

      <a href="#" class="button">{{ __('texts.includes.vantagens.button') }}</a>
    </div>

    <div class="right">
      <img src="{{asset('images/vantagem-image.png')}}" alt="Vantagem | Clube de Assinantes A Tribuna" title="Vantagem | Clube de Assinantes A Tribuna">
    </div>
  </div>
</section>