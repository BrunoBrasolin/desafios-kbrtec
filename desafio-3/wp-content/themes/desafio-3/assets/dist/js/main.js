"use strict";

$(document).ready(function () {
  feather.replace();
  $('.navbar .menu').click(function () {
    return $('.navbar .list').toggleClass('open');
  });
  $(document).scroll(function () {
    return $('.navbar .list').removeClass('open');
  }); // Home

  $('.banner-slider').slick({
    prevArrow: $('.banner-prev-arrow'),
    nextArrow: $('.banner-next-arrow'),
    draggable: false,
    fade: true
  });
  $('.input').on('focusin focusout keyup keydown', function () {
    if ($(this).is(':focus')) {
      $(this).parent().addClass('active');
      return;
    }

    if ($(this).val() != '') {
      $(this).parent().addClass('active');
      return;
    }

    $(this).parent().removeClass('active');
  });
  $('.itens-grandes-slider').slick({
    draggable: false,
    fade: true,
    arrows: false
  });
  $('.itens-pequenos-slider').slick({
    draggable: false,
    slidesToShow: 6,
    infinite: true,
    prevArrow: $('.itens-prev-arrow'),
    nextArrow: $('.itens-next-arrow'),
    asNavFor: $('.itens-grandes-slider'),
    responsive: [{
      breakpoint: 820,
      settings: {
        slidesToShow: 4
      }
    }, {
      breakpoint: 450,
      settings: {
        slidesToShow: 2
      }
    }, {
      breakpoint: 350,
      settings: {
        slidesToShow: 1
      }
    }]
  });

  function activeItem() {
    var active = $('.itens-pequenos-slider .slick-active')[0];
    $('.itens-pequenos-slider .item-pequeno').removeClass('active-item');
    $(active).addClass('active-item');
  }

  activeItem();
  $('.itens-pequenos-slider').on('afterChange', function (event, slick, currentSlide, nextSlide) {
    activeItem();
  });
  $('.item-pequeno').map(function () {
    $(this).css('background-color', $(this).data('background-color'));
    $(this).css('color', $(this).data('color'));
  });
  $('.item-pequeno').click(function () {
    $('.itens-grandes-slider').slick('slickGoTo', $(this).data('slick-index'));
    $('.itens-pequenos-slider').slick('slickGoTo', $(this).data('slick-index'));
  }); // Blog

  var searchParams = new URLSearchParams(window.location.search);
  $('#procura').val(searchParams.get('s'));
  var bigger;
  $('.custom-select .dropdown li').each(function () {
    if ($(this).data('id') == searchParams.get('cat')) $('.custom-select .label .text').html($(this).html());
    bigger = bigger > $(this).width() ? bigger : $(this).width();
  });
  $('.custom-select .label .text').width(bigger + 10);
  $('.custom-select').click(function () {
    var icon = $('.custom-select .label .right-item svg');
    $(icon).hasClass('feather-chevron-down') ? icon.replaceWith(feather.icons['chevron-up'].toSvg()) : icon.replaceWith(feather.icons['chevron-down'].toSvg());
    $(this).toggleClass('open');
  });
  $('.custom-select .dropdown li').click(function () {
    $('.categoria-input').val($(this).data('id'));
    $('.custom-select .label .text').html($(this).html());
  });
});