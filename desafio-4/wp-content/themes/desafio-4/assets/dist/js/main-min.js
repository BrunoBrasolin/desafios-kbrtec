"use strict";var base_url="http://localhost/bruno-brasolin/desafio-4/wp-content/themes/desafio-4";$(document).ready(function(){function t(){$(".add-to-cart-modal").hasClass("active")&&($(".add-to-cart-modal").removeClass("active"),$(".add-to-cart-modal .add-to-cart-animation-wapper").empty())}$(".banner-loja").slick({slidesToShow:1,arrows:!1,dots:!1,autoplay:!0,autplaySpeed:5e3,speed:800}),$(".add-to-cart-modal .close-icon").click(function(a){t()}),$(document).click(function(a){var i=$(".add-to-cart-modal .modal-content");i.is(a.target)||0!==i.has(a.target).length||t()}),$(".add-to-cart").click(function(a){var i=this;if(a.preventDefault(),$(this).hasClass("waiting"))return!1;$.ajax({url:"".concat(base_url,"/loja?add-to-cart=").concat($(this).data("product-id"),"&quantity=1"),type:"post",beforeSend:function(){$(i).addClass("waiting")},success:function(){$(".header .cart .total-itens").html(parseInt($(".header .cart .total-itens").text())+1),$(".add-to-cart-modal .add-to-cart-animation-wapper").append('\n\t\t\t\t\t<object class="add-to-cart-animation" type="image/svg+xml" data="'.concat(base_url,'/assets/dist/images/icons/cart-animation.svg">\n\t\t\t\t\t\t<img src="').concat(base_url,'/assets/dist/images/icons/cart-animation.svg" />\n\t\t\t\t\t</object>\n\t\t\t\t')),$(".add-to-cart-modal").addClass("active"),setTimeout(function(){return t()},2300)},complete:function(){$(i).removeClass("waiting")}})}),$(".filter-button, .close-filter").click(function(){$(".filter-button").toggleClass("active"),$(".loja-page .filters").toggleClass("active")}),$(".main-image-slider").slick({arrows:!0,dots:!1,slidesToShow:1,asNavFor:".gallery-slider",prevArrow:$(".main-image-arrows #prevArrow"),nextArrow:$(".main-image-arrows #nextArrow"),infinite:!1}),$(".gallery-slider").slick({arrows:!1,dots:!1,slidesToShow:4,asNavFor:".main-image-slider",infinite:!1}),$(".gallery-slider .gallery-image").click(function(){$(".gallery-slider").slick("slickGoTo",$(this).data("slick-index"))}),$(".attributes-list .item").click(function(){$('.attributes-list .item[data-attribute-position="'.concat($(this).data("attribute-position"),'"]')).removeClass("active"),$(this).addClass("active")})});