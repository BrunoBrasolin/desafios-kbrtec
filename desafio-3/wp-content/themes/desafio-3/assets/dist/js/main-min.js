"use strict";$(document).ready(function(){feather.replace();var e,t=new URLSearchParams(window.location.search);function i(){var e=$(".itens-pequenos-slider .slick-active")[0];$(".itens-pequenos-slider .item-pequeno").removeClass("active-item"),window.innerWidth>=350&&$(e).addClass("active-item")}if($(".navbar .hamburguer").click(function(){return $(".navbar .menu").toggleClass("open")}),$(document).scroll(function(){return $(".navbar .menu").removeClass("open")}),$(".banner-slider").slick({prevArrow:$(".banner-prev-arrow"),nextArrow:$(".banner-next-arrow"),draggable:!1,fade:!0}),$(".encontre .input").on("focusin focusout keyup keydown",function(){$(this).is(":focus")?$(this).parent().addClass("active"):""==$(this).val()?$(this).parent().removeClass("active"):$(this).parent().addClass("active")}),$.ajax({url:"https://servicodados.ibge.gov.br/api/v1/localidades/estados",method:"get",success:function(e){e.map(function(e){var t=document.createElement("option");t.value=e.id,t.innerHTML=e.sigla,document.querySelector(".estado-input")&&document.querySelector(".estado-input").append(t)})}}),$(".encontre .form").submit(function(e){var t=!1;$(".encontre .input").each(function(){""!=$(this).val()&&(t=!0)}),t||(e.preventDefault(),$(".encontre .form .erro").css("display","block"))}),$(".itens-pequenos-slider").on("init",function(e,t){window.innerWidth>=350&&$(".itens-pequenos-slider .item-pequeno").height($(".itens-pequenos-slider .item-pequeno").width())}),$(".itens-pequenos-slider").slick({draggable:!1,swipe:!1,slidesToShow:6,infinite:!0,prevArrow:$(".itens-prev-arrow"),nextArrow:$(".itens-next-arrow"),centerMode:!0,responsive:[{breakpoint:820,settings:{slidesToShow:4}},{breakpoint:450,settings:{slidesToShow:2}},{breakpoint:350,settings:{slidesToShow:1}}]}),$(".itens-grandes-slider").slick({draggable:!1,swipe:!1,fade:!0,arrows:!1,initialSlide:$(".itens-pequenos-slider .slick-active").data("slick-index")}),i(),$(".itens-pequenos-slider").on("afterChange",function(e,t,s,n){i()}),$(".itens-prev-arrow").click(function(){var e=$(".itens-pequenos-slider .slick-active")[0];$(".itens-grandes-slider").slick("slickGoTo",$(e).data("slick-index"))}),$(".itens-next-arrow").click(function(){var e=$(".itens-pequenos-slider .slick-active")[0];$(".itens-grandes-slider").slick("slickGoTo",$(e).data("slick-index"))}),$(".itens-pequenos-slider .item-pequeno").click(function(){var e=0;window.innerWidth>=820?e=$(this).data("slick-index")+2:window.innerWidth>=450?e=$(this).data("slick-index")+1:window.innerWidth>=350&&(e=$(this).data("slick-index")),$(".itens-pequenos-slider").slick("slickGoTo",e)}),$(".item-pequeno").map(function(){$(this).css("background-color",$(this).data("background-color")),$(this).css("color",$(this).data("color"))}),$(".item-pequeno").click(function(){$(".itens-grandes-slider").slick("slickGoTo",$(this).data("slick-index")),$(".itens-pequenos-slider").slick("slickGoTo",$(this).data("slick-index"))}),$("#procura").val(t.get("s")),$(".custom-select .dropdown li").each(function(){$(this).data("id")==t.get("cat")&&$(".custom-select .label .text").html($(this).html()),e=e>$(this).width()?e:$(this).width()}),$(".custom-select .label .text").width(e+25),$(".custom-select").click(function(){var e=$(".custom-select .label .right-item svg");$(e).hasClass("feather-chevron-down")?e.replaceWith(feather.icons["chevron-up"].toSvg()):e.replaceWith(feather.icons["chevron-down"].toSvg()),$(this).toggleClass("open")}),$(".custom-select .dropdown li").click(function(){$(".categoria-input").val($(this).data("id")),$(".custom-select .label .text").html($(this).html())}),document.getElementById("de")&&document.getElementById("ate"))new Litepicker({element:document.getElementById("de")}),new Litepicker({element:document.getElementById("ate")});$("#de").val(t.get("de")),$("#ate").val(t.get("ate")),$(".tabs .content-slider").slick({fade:!0,slidesToShow:1,draggable:!1,swipe:!1,arrows:!1,dots:!1}),$(".tabs .esquerda .subtitle").click(function(){$(".tabs .content-slider").slick("slickGoTo",$(this).index()),$(".tabs .esquerda .subtitle").removeClass("active"),$(this).addClass("active")}),$(".treinamentos .content-slider").slick({fade:!0,slidesToShow:1,draggable:!1,swipe:!1,arrows:!1,dots:!1}),$(".treinamentos .esquerda .subtitle-container").click(function(){$(".treinamentos .content-slider").slick("slickGoTo",$(this).index()),$(".treinamentos .esquerda .subtitle-container").removeClass("active"),$(this).addClass("active")})});