"use strict";

var base_url = 'http://ambiente-desenvolvimento.provisorio.ws/bruno-brasolin/desafio-4/wp-content/themes/desafio-4'; // const base_url = 'http://localhost/bruno-brasolin/desafio-4/wp-content/themes/desafio-4';
// ARCHIVE PAGE

$(document).ready(function () {
  $('.banner-loja').slick({
    slidesToShow: 1,
    arrows: false,
    dots: false,
    autoplay: true,
    autplaySpeed: 5000,
    speed: 800
  });
  $('.hover-slider').slick({
    slidesToShow: 3,
    arrows: false,
    variableWidth: true,
    infinite: false
  });
  $('.hover-slider .product-image-hover').hover(function () {
    $(this).parent().find('.product-image-hover').removeClass('active');
    $(this).addClass('active');
    $(this).parent().parent().parent().parent().parent().find('.product-image img').attr('src', $(this).find('img').attr('src'));
  });

  function closeAddToCartModal() {
    if ($('.add-to-cart-modal').hasClass('active')) {
      $('.add-to-cart-modal').removeClass('active');
      $('.add-to-cart-modal .add-to-cart-animation-wapper').empty();
    }
  }

  $('.add-to-cart-modal .close-icon').click(function (e) {
    closeAddToCartModal();
  });
  $(document).click(function (e) {
    var container = $('.add-to-cart-modal .modal-content');

    if (!container.is(e.target) && container.has(e.target).length === 0) {
      closeAddToCartModal();
    }
  });
  $('.add-to-cart').click(function (e) {
    var _this = this;

    e.preventDefault();
    if ($(this).hasClass('waiting')) return false;
    var quantity = $('#product_quantity').val();
    $.ajax({
      url: "".concat(base_url, "/loja"),
      type: 'post',
      data: {
        'add-to-cart': $(this).data('product-id'),
        quantity: quantity
      },
      beforeSend: function beforeSend() {
        $(_this).addClass('waiting');
      },
      success: function success() {
        $('.header .cart .total-itens').html(parseInt($('.header .cart .total-itens').text()) + parseInt(quantity));
        $('.add-to-cart-modal .add-to-cart-animation-wapper').append("\n\t\t\t\t\t<object class=\"add-to-cart-animation\" type=\"image/svg+xml\" data=\"".concat(base_url, "/assets/dist/images/icons/cart-animation.svg\">\n\t\t\t\t\t\t<img src=\"").concat(base_url, "/assets/dist/images/icons/cart-animation.svg\" />\n\t\t\t\t\t</object>\n\t\t\t\t"));
        $('.add-to-cart-modal').addClass('active');
        setTimeout(function () {
          return closeAddToCartModal();
        }, 2300);
      },
      complete: function complete() {
        $(_this).removeClass('waiting');
      }
    });
  });
  $('.filter-button, .close-filter').click(function () {
    $('.filter-button').toggleClass('active');
    $('.loja-page .filters').toggleClass('active');
  }); // SINGLE PAGE

  $('.main-image-slider').slick({
    arrows: true,
    dots: false,
    slidesToShow: 1,
    asNavFor: '.gallery-slider',
    prevArrow: $('.main-image-arrows #prevArrow'),
    nextArrow: $('.main-image-arrows #nextArrow'),
    infinite: false
  });
  $('.gallery-slider').slick({
    arrows: false,
    dots: false,
    slidesToShow: 4,
    asNavFor: '.main-image-slider',
    infinite: false
  });
  $('.gallery-slider .gallery-image').click(function () {
    $('.gallery-slider').slick('slickGoTo', $(this).data('slick-index'));
  });
  $('.attributes-list .item').click(function () {
    $(".attributes-list .item[data-attribute-position=\"".concat($(this).data('attribute-position'), "\"]")).removeClass('active');
    $(this).addClass('active');
  });
  $('.input-zip').mask('00000-000');
});