<section class="topbar">
  <div class="topbar-content">
    <span class="weather">
      27° | 22° {{ __('texts.words.weather') }}
    </span>

    <div class="social-container">
      <a href="{{env('FACEBOOK_LINK') ?? '#'}}" class="social-link" title="Facebook | {{ __('texts.application_name') }}">
        <img class="icon" src="{{asset('/svg/facebook.svg')}}" alt="Facebook | {{ __('texts.application_name') }}" title="Facebook | {{ __('texts.application_name') }}">
      </a>
      <a href="{{env('INSTAGRAM_LINK') ?? '#'}}" class="social-link" title="Instagram | {{ __('texts.application_name') }}">
        <img class="icon" src="{{asset('/svg/instagram.svg')}}" alt="Instagram | {{ __('texts.application_name') }}" title="Instagram | {{ __('texts.application_name') }}">
      </a>
    </div>
  </div>
</section>