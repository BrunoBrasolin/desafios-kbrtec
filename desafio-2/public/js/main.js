let url = window.location.pathname.split("/");
if (url[url.length - 1].replace(".php", "")) document.querySelector(`#${url[3].replace(".php", "")}`).classList.add("active");

$(document).ready(function () {
  $(".banner-slider").slick({
    arrows: false,
    dots: true,
    fade: true,
    autoplay: true,
    autoplaySpeed: 5000,
  });

  $(".estrutura-slider").slick({
    slidesToShow: 5,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 896,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 430,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
    prevArrow: '<div class="arrows-container" id="prev-arrow"><span class="arrows"><i class="fas fa-xs fa-chevron-left"></i></span></div>',
    nextArrow: '<div class="arrows-container" id="next-arrow"><span class="arrows"><i class="fas fa-xs fa-chevron-right"></i></span></div>',
  });

  $(".acomodacao-slider-principal").slick({
    slidesToShow: 1,
    infinite: false,
    prevArrow: '<span class="arrow prev"><i class="fas fa-chevron-left"></i></span>',
    nextArrow: '<span class="arrow next"><i class="fas fa-chevron-right"></i></span>',
  });

  $(".acomodacao-slider-secundario").slick({
    slidesToShow: 4,
    arrows: false,
    infinite: false,
  });

  $(".acomodacao-slider-principal").on("beforeChange", function (event, slick, currentSlide, nextSlide) {
    nextSlide = nextSlide == slick.slideCount - 2 ? nextSlide - 2 : nextSlide - 1;
    $(`.acomodacao-slider-secundario[data-interacao="${$(this).data("interacao")}"]`).slick("slickGoTo", nextSlide);
  });
  $(".acomodacao-slider-secundario").on("beforeChange", function (event, slick, currentSlide, nextSlide) {
    nextSlide = nextSlide == slick.slideCount - 2 ? nextSlide - 2 : nextSlide;
    $(`.acomodacao-slider-principal[data-interacao="${$(this).data("interacao")}"]`).slick("slickGoTo", nextSlide);
  });

  $(".acomodacao-slider-secundario a").click(function (e) {
    e.preventDefault();
    $(`.acomodacao-slider-principal[data-interacao="${$(this).data("interacao")}`).slick("slickGoTo", $(this).data("slide"));
    $(`.acomodacao-slider-secundario[data-interacao="${$(this).data("interacao")}`).slick("slickGoTo", $(this).data("slide"));
  });

  $(".mobile-menu").click(function () {
    $(".cabecalho .segunda-linha .itens").toggleClass("aberto");
  });

  $(".pagina-fotos .fotos").lightGallery({
    download: false,
  });

  $(".pagina-fotos .fotos").slick({
    slidesToShow: 5,
    autoplay: true,
    prevArrow: '<div class="arrows-container" id="prev-arrow"><span class="arrows"><i class="fas fa-xs fa-chevron-left"></i></span></div>',
    nextArrow: '<div class="arrows-container" id="next-arrow"><span class="arrows"><i class="fas fa-xs fa-chevron-right"></i></span></div>',
    variableWidth: true,
    responsive: [
      {
        breakpoint: 999999,
        settings: "unslick",
      },
      {
        breakpoint: 1050,
        slidesToShow: 5,
      },
    ],
  });

  var SPMaskBehavior = function (val) {
      return val.replace(/\D/g, "").length === 11 ? "(00) 00000-0000" : "(00) 0000-00009";
    },
    spOptions = {
      onKeyPress: function (val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
      },
    };

  $("#telefone").mask(SPMaskBehavior, spOptions);

  $("#formulario-contato .input").focus(function () {
    this.classList.remove("erro");
  });

  $("#formulario-contato").submit(function (e) {
    e.preventDefault();
    let erro = false;

    let nome = $(this).find("#nome");
    let nomeValue = $(nome).val();
    if (/\d/.test(nomeValue) || /[^a-z\sáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ]/i.test(nomeValue) || nomeValue.length < 2) {
      erro = true;
      $(nome).addClass("erro");
    }

    let telefone = $(this).find("#telefone");
    let telefoneValue = $(telefone).val();
    if (telefoneValue.length !== 14 && telefoneValue.length !== 15) {
      erro = true;
      $(telefone).addClass("erro");
    }

    let email = $(this).find("#email");
    let emailValue = $(email).val();
    const re =
      /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!re.test(String(emailValue).toLowerCase())) {
      erro = true;
      $(email).addClass("erro");
    }

    let assunto = $(this).find("#assunto");
    let assuntoValue = $(assunto).val();
    let acomodacaoValue = "";
    let checkinValue = "";
    let checkoutValue = "";
    let mensagem = "";
    let mensagemValue = "";

    if (assuntoValue == "reserva") {
      let acomodacao = $(this).find("#acomodacao");
      acomodacaoValue = $(acomodacao).val();
      if (acomodacaoValue == null) {
        erro = true;
        $(acomodacao).addClass("erro");
      }

      let checkin = $(this).find("#checkin");
      checkinValue = $(checkin).val();
      if (checkinValue == "" || checkinValue < new Date().toISOString().slice(0, 10)) {
        erro = true;
        $(checkin).addClass("erro");
      }

      let checkout = $(this).find("#checkout");
      checkoutValue = $(checkout).val();
      if (checkoutValue == "" || checkoutValue < checkinValue) {
        erro = true;
        $(checkout).addClass("erro");
      }
    } else if (assuntoValue == "duvidas" || assuntoValue == "informacoes") {
      mensagem = $(this).find("#mensagem");
      mensagemValue = $(mensagem).val();
      if (mensagemValue == "") {
        erro = true;
        $(mensagem).addClass("erro");
      }
    }

    var data = {
      nome: nomeValue,
      email: emailValue,
      telefone: telefoneValue,
      mensagem: mensagemValue,
      assunto: assuntoValue,
      checkin: checkinValue,
      checkout: checkoutValue,
      acomodacao: acomodacaoValue,
    };

    if (!erro)
      $.ajax({
        type: "POST",
        url: `contato/${assuntoValue}/obrigado`,
        data: data,
        beforeSend: () => {
          $(".mensagem > div").css("display", "none");
          $(".mensagem .carregando").css("display", "flex");
        },
        success: () => {
          $(".mensagem > div").css("display", "none");
          $(".mensagem .sucesso").css("display", "flex");
          let url = window.location.pathname.split("/");
          url.pop();
          window.location = url.join("/") + `/contato/${assuntoValue}/obrigado`;
          localStorage.setItem("data", JSON.stringify({ ...data }));
        },
        error: () => {
          $(".mensagem > div").css("display", "none");
          $(".mensagem .erro").css("display", "flex");
        },
        complete: () => console.log("completado"),
      });
  });

  $("input#checkin, input#checkout").attr("min", new Date().toISOString().slice(0, 10));
  $("input#checkin").change(function () {
    $("input#checkout").attr("min", $(this).val());
  });
  $("input#checkout").change(function () {
    $("input#checkin").attr("max", $(this).val());
  });

  $("#assunto").change(function () {
    $(this).val() == "reserva" ? $(".select-reserva").css("display", "flex") : $(".select-reserva").css("display", "none");
  });
});

