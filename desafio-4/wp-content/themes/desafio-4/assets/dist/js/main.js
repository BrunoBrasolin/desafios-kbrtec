"use strict";

$(document).ready(function () {
  $('.banner-loja').slick({
    slidesToShow: 1,
    arrows: false,
    dots: false,
    autoplay: true,
    autplaySpeed: 5000,
    speed: 800
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
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'Item adicionado ao carrinho',
          showConfirmButton: false,
          timer: 1500
        });
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