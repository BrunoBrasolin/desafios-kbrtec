"use strict";

var base_url = 'http://localhost/bruno-brasolin/desafio-4/wp-content/themes/desafio-4';
$(document).ready(function () {
  $('.banner-loja').slick({
    slidesToShow: 1,
    arrows: false,
    dots: false,
    autoplay: true,
    autplaySpeed: 5000,
    speed: 800
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
    $.ajax({
      url: window.location.href,
      type: 'get',
      data: {
        'add-to-cart': $(this).parent().data('product-id')
      },
      beforeSend: function beforeSend() {
        $(_this).addClass('waiting');
      },
      success: function success() {
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
  $('.filter-button').click(function () {
    $(this).toggleClass('active');
  });
});