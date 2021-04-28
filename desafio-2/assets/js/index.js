let url = window.location.pathname.split("/");

if (url[url.length - 1].replace(".php", "")) document.querySelector(`#${url[url.length - 1].replace(".php", "")}`).classList.add("active");

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
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 896,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 430,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
    prevArrow:
      '<div class="estrutura-arrows-container" id="estrutura-prev-arrow"><span class="estrutura-arrows"><i class="fas fa-xs fa-chevron-left"></i></span></div>',
    nextArrow:
      '<div class="estrutura-arrows-container" id="estrutura-next-arrow"><span class="estrutura-arrows"><i class="fas fa-xs fa-chevron-right"></i></span></div>',
  });

  $(".mobile-menu").click(function () {
    $(".cabecalho .segunda-linha .itens").toggleClass("aberto");
  });
});
