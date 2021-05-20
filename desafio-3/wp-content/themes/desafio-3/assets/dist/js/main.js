"use strict";

$(document).ready(function () {
  feather.replace();
  $('.banner-slider').slick({
    prevArrow: $('.banner-prev-arrow'),
    nextArrow: $('.banner-next-arrow'),
    draggable: false,
    fade: true
  });
});