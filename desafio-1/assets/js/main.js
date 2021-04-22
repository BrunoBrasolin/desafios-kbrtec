$(document).ready(function () {
  if (typeof $(".depo-slider").slick !== "undefined")
    $(".depo-slider").slick({
      vertical: true,
      slidesToShow: 3,
      infinite: false,
      draggable: false,
      prevArrow: '<span class="depo-arrows" id="depo-prev-arrow"><i class="fas fa-sm fa-chevron-up"></i></span>',
      nextArrow: '<span class="depo-arrows" id="depo-next-arrow"><i class="fas fa-sm fa-chevron-down"></i></span>',
      responsive: [
        {
          breakpoint: 1050,
          settings: {
            slidesToShow: 1,
            draggable: true,
          },
        },
      ],
    });

  if (typeof $(".slick-track").lightGallery !== "undefined") $(".slick-track").lightGallery();

  $(".modal .input").focus(function () {
    $(this).parent().addClass("active");
  });

  $(".modal .input").blur(function () {
    if ($(this).val() === "") $(this).parent().removeClass("active");

    $(this).parent().find(".error-message-nome-").removeClass("active");
  });

  $(".modal .form").submit(function (e) {
    e.preventDefault();
    let nomeValido = validateNome($(this).find($("#nome")).val());
    let telefoneValido = validateTelefone($(this).find($("#telefone")).val());
    let cpfValido = validateCpf($(this).find($("#cpf")).val());

    if (nomeValido && telefoneValido && cpfValido) {
      $(".modal .content .before").css("display", "none");
      $(".modal .content .after").css("display", "flex");
    }
  });

  function selectStep(step) {
    $("#cadastro-page .list .item").removeClass("active");
    $(`#cadastro-page .list .item:nth-child(${step})`).addClass("active");
    $(".step")
      .fadeOut(500)
      .promise()
      .done(() => $(`.step-${step}`).css("display", "flex").fadeIn(500));
    step == 3
      ? $(".subtitle").html("<strong class='strong'>Obrigado</strong>")
      : $(".subtitle").html("Crie <strong class='strong'>sua conta</strong>");
  }

  $("#cadastro-page .list .item:nth-child(1)").click(function () {
    selectStep(1);
  });

  $(".select-step-2, .item:nth-child(2)").click(function (e) {
    e.preventDefault();
    let nomeValido = validateNome($(".step-1").find($("#nome")).val());
    let telefoneValido = validateTelefone($(".step-1").find($("#celular")).val());
    let emailValido = validateEmail($(".step-1").find($("#email")).val());
    if (nomeValido && telefoneValido && emailValido) {
      selectStep(2);
      getEstados();
    }
  });

  $(".select-step-3, .item:nth-child(3)").click(function (e) {
    e.preventDefault();
    let cpfValido = validateCpf($(".step-2").find($("#cpf")).val());
    let estadoValido = validateObrigatorio("estado");
    let cidadeValida = validateObrigatorio("cidade");
    if (cpfValido && estadoValido && cidadeValida) {
      selectStep(3);
    }
  });

  $(".estado-input").change(function () {
    getCidades(this.value);
  });

  // if (typeof $(".step select").selectize !== "undefined")
  //   $(".step select").selectize();

  $(document).keydown(function (e) {
    if (e.key === "Escape") $(".modal").removeClass("active");
  });

  $(document).mouseup(function (e) {
    var container = $(".modal .content");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      $(".modal").removeClass("active");
    }
  });

  $(".modal .close-icon").mouseup(function (e) {
    $(".modal").removeClass("active");
  });

  document.addEventListener("mouseout", event => {
    if (!event.toElement && !event.relatedTarget) {
      setTimeout(() => {
        if (!localStorage.getItem("openedModal")) $(".modal").addClass("active");
        localStorage.setItem("openedModal", true);
      }, 500);
    }
  });
});
