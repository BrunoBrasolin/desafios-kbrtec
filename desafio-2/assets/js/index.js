$(document).ready(function () {
  $(".banner-slider").slick({
    arrows: false,
    dots: true,
    fade: true,
    autoplay: true,
    autoplaySpeed: 5000,
  });

  $(".estrutura-slider").slick({
    slidesToShow: 5,
    prevArrow: '<div class="estrutura-arrows-container" id="estrutura-prev-arrow"><span class="estrutura-arrows"><i class="fas fa-xs fa-chevron-left"></i></span></div>',
    nextArrow: '<div class="estrutura-arrows-container" id="estrutura-next-arrow"><span class="estrutura-arrows"><i class="fas fa-xs fa-chevron-right"></i></span></div>',
  });
});
