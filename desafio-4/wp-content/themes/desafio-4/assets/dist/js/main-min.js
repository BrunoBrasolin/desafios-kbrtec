"use strict";$(document).ready(function(){$(".banner-loja").slick({slidesToShow:1,arrows:!1,dots:!1,autoplay:!0,autplaySpeed:5e3,speed:800}),$(".add-to-cart").click(function(t){var o=this;t.preventDefault(),$.ajax({url:window.location.href,type:"get",data:{"add-to-cart":$(this).parent().data("product-id")},beforeSend:function(){$(o).addClass("waiting")},success:function(){Swal.fire({position:"top-end",icon:"success",title:"Item adicionado ao carrinho",showConfirmButton:!1,timer:1500})},complete:function(){$(o).removeClass("waiting")}})}),$(".filter-button").click(function(){$(this).toggleClass("active")})});