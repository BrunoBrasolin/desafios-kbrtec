"use strict";$(document).ready(function(){function e(){var e=$(".itens-pequenos-slider .slick-active")[0];$(".itens-pequenos-slider .item-pequeno").removeClass("active-item"),$(e).addClass("active-item")}feather.replace(),$(".navbar .menu").click(function(){return $(".navbar .list").toggleClass("open")}),$(document).scroll(function(){return $(".navbar .list").removeClass("open")}),$(".banner-slider").slick({prevArrow:$(".banner-prev-arrow"),nextArrow:$(".banner-next-arrow"),draggable:!1,fade:!0}),$(".input").on("focusin focusout keyup keydown",function(){$(this).is(":focus")?$(this).parent().addClass("active"):""==$(this).val()?$(this).parent().removeClass("active"):$(this).parent().addClass("active")}),$(".itens-grandes-slider").slick({draggable:!1,fade:!0,arrows:!1}),$(".itens-pequenos-slider").slick({draggable:!1,slidesToShow:6,infinite:!0,prevArrow:$(".itens-prev-arrow"),nextArrow:$(".itens-next-arrow"),asNavFor:$(".itens-grandes-slider"),responsive:[{breakpoint:820,settings:{slidesToShow:4}},{breakpoint:450,settings:{slidesToShow:2}}]}),e(),$(".itens-pequenos-slider").on("afterChange",function(s,i,n,t){e()}),$(".item-pequeno").map(function(){$(this).css("background-color",$(this).data("background-color")),$(this).css("color",$(this).data("color"))}),$(".item-pequeno").click(function(){$(".itens-grandes-slider").slick("slickGoTo",$(this).data("slick-index")),$(".itens-pequenos-slider").slick("slickGoTo",$(this).data("slick-index"))})});