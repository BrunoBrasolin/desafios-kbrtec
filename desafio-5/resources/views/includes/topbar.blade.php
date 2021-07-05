<section class="topbar">
  <div class="topbar-content">
    <span class="weather">
      27° | 22° TEMPO
    </span>

    <div class="social-container">
      <a href="{{env('FACEBOOK_LINK') ?? '#'}}" class="social-link">
        <img class="icon" src="{{asset('/svg/facebook.svg')}}" alt="facebook">
      </a>
      <a href="{{env('INSTAGRAM_LINK') ?? '#'}}" class="social-link">
        <img class="icon" src="{{asset('/svg/instagram.svg')}}" alt="instagram">
      </a>
    </div>
  </div>
</section>