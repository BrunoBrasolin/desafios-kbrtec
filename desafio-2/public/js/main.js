"use strict";

function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) { symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); } keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

var url = window.location.pathname.split("/");
if (url[url.length - 1]) document.querySelector("#".concat(url[3])).classList.add("active");
$(document).ready(function () {
  $(".banner-slider").slick({
    arrows: false,
    dots: true,
    fade: true,
    autoplay: true,
    autoplaySpeed: 5000
  });
  $(".estrutura-slider").slick({
    slidesToShow: 5,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 4
      }
    }, {
      breakpoint: 896,
      settings: {
        slidesToShow: 3
      }
    }, {
      breakpoint: 768,
      settings: {
        slidesToShow: 2
      }
    }, {
      breakpoint: 430,
      settings: {
        slidesToShow: 1
      }
    }],
    prevArrow: '<div class="arrows-container" id="prev-arrow"><span class="arrows"><i class="fas fa-xs fa-chevron-left"></i></span></div>',
    nextArrow: '<div class="arrows-container" id="next-arrow"><span class="arrows"><i class="fas fa-xs fa-chevron-right"></i></span></div>'
  });
  $(".acomodacao-slider-principal").slick({
    slidesToShow: 1,
    infinite: false,
    prevArrow: '<span class="arrow prev"><i class="fas fa-chevron-left"></i></span>',
    nextArrow: '<span class="arrow next"><i class="fas fa-chevron-right"></i></span>'
  });
  $(".acomodacao-slider-secundario").slick({
    slidesToShow: 4,
    arrows: false,
    infinite: false
  });
  $(".acomodacao-slider-principal").on("beforeChange", function (event, slick, currentSlide, nextSlide) {
    nextSlide = nextSlide == slick.slideCount - 2 ? nextSlide - 2 : nextSlide - 1;
    $(".acomodacao-slider-secundario[data-interacao=\"".concat($(this).data("interacao"), "\"]")).slick("slickGoTo", nextSlide);
  });
  $(".acomodacao-slider-secundario").on("beforeChange", function (event, slick, currentSlide, nextSlide) {
    nextSlide = nextSlide == slick.slideCount - 2 ? nextSlide - 2 : nextSlide;
    $(".acomodacao-slider-principal[data-interacao=\"".concat($(this).data("interacao"), "\"]")).slick("slickGoTo", nextSlide);
  });
  $(".acomodacao-slider-secundario a").click(function (e) {
    e.preventDefault();
    $(".acomodacao-slider-principal[data-interacao=\"".concat($(this).data("interacao"))).slick("slickGoTo", $(this).data("slide"));
    $(".acomodacao-slider-secundario[data-interacao=\"".concat($(this).data("interacao"))).slick("slickGoTo", $(this).data("slide"));
  });
  $(".mobile-menu").click(function () {
    $(".cabecalho .segunda-linha .itens").toggleClass("aberto");
  });
  $(".pagina-fotos .fotos").lightGallery({
    download: false
  });
  $(".pagina-fotos .fotos").slick({
    slidesToShow: 5,
    autoplay: true,
    prevArrow: '<div class="arrows-container" id="prev-arrow"><span class="arrows"><i class="fas fa-xs fa-chevron-left"></i></span></div>',
    nextArrow: '<div class="arrows-container" id="next-arrow"><span class="arrows"><i class="fas fa-xs fa-chevron-right"></i></span></div>',
    variableWidth: true,
    responsive: [{
      breakpoint: 999999,
      settings: "unslick"
    }, {
      breakpoint: 1050,
      slidesToShow: 5
    }]
  });

  var SPMaskBehavior = function SPMaskBehavior(val) {
    return val.replace(/\D/g, "").length === 11 ? "(00) 00000-0000" : "(00) 0000-00009";
  },
      spOptions = {
    onKeyPress: function onKeyPress(val, e, field, options) {
      field.mask(SPMaskBehavior.apply({}, arguments), options);
    }
  };

  $("#telefone").mask(SPMaskBehavior, spOptions);
  $("#formulario-contato .input").focus(function () {
    this.classList.remove("erro");
    $(this).parent().find(".mensagem-erro").css("visibility", "hidden");
  });
  $("#formulario-contato").submit(function (e) {
    e.preventDefault();
    var erro = false;
    var nome = $(this).find("#nome");
    var nomeValue = $(nome).val();

    if (/\d/.test(nomeValue) || /[^a-z\sáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ]/i.test(nomeValue) || nomeValue.length < 2) {
      erro = true;
      $(nome).addClass("erro");
      $(nome).parent().find(".mensagem-erro").css("visibility", "visible");
    }

    var telefone = $(this).find("#telefone");
    var telefoneValue = $(telefone).val();

    if (telefoneValue.length !== 14 && telefoneValue.length !== 15) {
      erro = true;
      $(telefone).addClass("erro");
      $(telefone).parent().find(".mensagem-erro").css("visibility", "visible");
    }

    var email = $(this).find("#email");
    var emailValue = $(email).val();
    var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (!re.test(String(emailValue).toLowerCase())) {
      erro = true;
      $(email).addClass("erro");
      $(email).parent().find(".mensagem-erro").css("visibility", "visible");
    }

    var assunto = $(this).find("#assunto");
    var assuntoValue = $(assunto).val();
    var acomodacaoValue = "";
    var datasValue = "";
    var mensagem = "";
    var mensagemValue = "";

    if (assuntoValue == null) {
      erro = true;
      $(assunto).addClass("erro");
      $(assunto).parent().find(".mensagem-erro").css("visibility", "visible");
    } else if (assuntoValue == "reserva") {
      var acomodacao = $(this).find("#acomodacao");
      acomodacaoValue = $(acomodacao).val();

      if (acomodacaoValue == null) {
        erro = true;
        $(acomodacao).addClass("erro");
        $(acomodacao).parent().find(".mensagem-erro").css("visibility", "visible");
      }

      var datas = $(this).find("#datas");
      datasValue = $(datas).val();

      if (datasValue == "") {
        erro = true;
        $(datas).addClass("erro");
        $(datas).parent().find(".mensagem-erro").css("visibility", "visible");
      }
    } else if (assuntoValue == "duvidas" || assuntoValue == "informacoes") {
      mensagem = $(this).find("#mensagem");
      mensagemValue = $(mensagem).val();

      if (mensagemValue == "") {
        erro = true;
        $(mensagem).addClass("erro");
        $(mensagem).parent().find(".mensagem-erro").css("visibility", "visible");
      }
    }

    var data = {
      nome: nomeValue,
      email: emailValue,
      telefone: telefoneValue,
      mensagem: mensagemValue,
      assunto: assuntoValue,
      datas: datasValue,
      acomodacao: acomodacaoValue
    };
    if (!erro) $.ajax({
      type: "POST",
      url: "contato/".concat(assuntoValue, "/obrigado"),
      data: data,
      beforeSend: function beforeSend() {
        $(".mensagem > div").css("display", "none");
        $(".mensagem .carregando").css("display", "flex");
      },
      success: function success() {
        $(".mensagem > div").css("display", "none");
        $(".mensagem .sucesso").css("display", "flex");
        var url = window.location.pathname.split("/");
        url.pop();
        window.location = url.join("/") + "/contato/".concat(assuntoValue, "/obrigado");
        localStorage.setItem("data", JSON.stringify(_objectSpread({}, data)));
      },
      error: function error() {
        $(".mensagem > div").css("display", "none");
        $(".mensagem .erro").css("display", "flex");
      },
      complete: function complete() {
        return console.log("completado");
      }
    });
  });
  $("#assunto").change(function () {
    $(this).val() == "reserva" ? $(".select-reserva").css("display", "flex") : $(".select-reserva").css("display", "none");
  });
  var searchParams = new URLSearchParams(window.location.search);

  if (searchParams.has("acomodacao")) {
    $("#assunto").val("reserva");
    $(".select-reserva").css("display", "flex");
    $("#acomodacao").val(searchParams.get("acomodacao"));
  }

  if (document.getElementById("datas") !== null) {
    var datas = new Litepicker({
      element: document.getElementById("datas"),
      minDate: new Date().toISOString().slice(0, 10),
      format: "DD/MM/YYYY",
      singleMode: false,
      tooltipText: {
        one: "noite",
        other: "noites"
      },
      tooltipNumber: function tooltipNumber(totalDays) {
        return totalDays - 1;
      }
    });
  }

  if (document.querySelector("#email")) document.querySelector("#email").innerHTML = JSON.parse(localStorage.getItem("data")).email;else if (document.querySelector("#acomodacao")) {
    var acomodacoes = [{
      id: 1,
      titulo: "Suíte master",
      descricao: ["Cama de casal Queen", "Frigobar", "Varanda com vista pro mar", "Banheiro individual"],
      fotoPrincipal: "/bruno-brasolin/desafio-2/public/img/acomodacoes/acomodacao-1.png"
    }, {
      id: 2,
      titulo: "Suíte simples",
      descricao: ["Acomodação para duas pessoas ou 1 pessoa (quarto individual)", "Cama de casal Queen", "Frigobar", "Banheiro individual"],
      fotoPrincipal: "/bruno-brasolin/desafio-2/public/img/acomodacoes/acomodacao-2.png"
    }, {
      id: 3,
      titulo: "Quarto coletivo com 3 beliches",
      descricao: ["Acomodação coletiva para até 6 pessoas", "3 beliches", "Frigobar", "Locker no quarto com 1 armazenamento para cada pessoa"],
      fotoPrincipal: "/bruno-brasolin/desafio-2/public/img/acomodacoes/acomodacao-3.png"
    }, {
      id: 4,
      titulo: "Quarto coletivo feminino com 3 beliches",
      descricao: ["Acomodação coletiva de até 6 pessoas", "3 beliches", "Frigobar", "Locker no quarto com 1 armazenamento para cada pessoa", "Banheiro coletivo no quarto com 1 sanitário privativo", "1 chuveiro com vestiário"],
      fotoPrincipal: "/bruno-brasolin/desafio-2/public/img/acomodacoes/acomodacao-4.png"
    }, {
      id: 5,
      titulo: "Quarto de coletivo com acessibilidade",
      descricao: ["Acomodação coletiva de até 6 pessoas", "3 beliches", "Frigobar", "Locker no quarto com 1 armazenamento para cada pessoa", "Banheiro coletivo no quarto com 1 sanitário e chuveiro com acessibilidade para deficiente", "1 chuveiro coletivo sem acessibilidade", "1 sanitário privativo com porta"],
      fotoPrincipal: "/bruno-brasolin/desafio-2/public/img/acomodacoes/acomodacao-5.png"
    }, {
      id: 6,
      titulo: "Quarto coletivo com 4 beliches",
      descricao: ["Acomodação coletiva para até 8 pessoas", "4 beliches", "Frigobar", "Locker no quarto com 1 armazenamento para cada pessoa"],
      fotoPrincipal: "/bruno-brasolin/desafio-2/public/img/acomodacoes/acomodacao-6.png",
      observacao: "No caso dos quartos coletivos com 3 e 4 beliches ambos terão 1 banheiro coletivo entre os dois para uso de ambos, segue descrição do banheiro:",
      "lista-titulo": "Banheiro coletivo (dois banheiros coletivos, hum para cada 2 quartos):",
      lista: ["2 chuveiros com vestiários embutidos", "1 sanitário privativo com porta", "1 pia dupla com espelho", "1 mictório"]
    }];
    var acomodacao = acomodacoes.find(function (acomodacao) {
      return acomodacao.id == JSON.parse(localStorage.getItem("data")).acomodacao;
    });
    document.querySelector("#acomodacao").innerHTML = acomodacao.titulo;
    acomodacao.descricao.map(function (item) {
      var li = document.createElement("li");
      li.innerHTML = item;
      li.classList.add("descricao-item");
      document.querySelector("#descricao").appendChild(li);
    });
    document.querySelector("#acomodacao-imagem").setAttribute("src", acomodacao.fotoPrincipal);
    document.querySelector("#datas").innerHTML = JSON.parse(localStorage.getItem("data")).datas;
  }
});