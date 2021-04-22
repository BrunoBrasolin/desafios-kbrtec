function createOption(id, nome) {
  let option = document.createElement("option");
  option.value = id;
  option.innerHTML = nome;
  option.classList.add("option");
  return option;
}

function getEstados() {
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "https://servicodados.ibge.gov.br/api/v1/localidades/estados");
  xhr.onreadystatechange = () => {
    if (xhr.readyState == 4) {
      if (xhr.status == 200) {
        JSON.parse(xhr.responseText).map(estado => {
          document.querySelector(".estado-input").append(createOption(estado.id, estado.nome));
        });
      } else console.log(xhr.responseText);
    }
  };
  xhr.send();
}

function getCidades(estadoId) {
  let xhr = new XMLHttpRequest();
  xhr.open("GET", `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${estadoId}/municipios`);
  xhr.onreadystatechange = () => {
    if (xhr.readyState == 4) {
      if (xhr.status == 200) {
        let defaultOption = document.createElement("option");
        defaultOption.innerHTML = "Selecione uma cidade";
        defaultOption.value = "";
        defaultOption.classList.add("option");
        defaultOption.selected = true;
        document.querySelector(".cidade-input").innerHTML = "";
        document.querySelector(".cidade-input").disabled = false;
        document.querySelector(".cidade-input").append(defaultOption);

        JSON.parse(xhr.responseText).map(cidade => {
          document.querySelector(".cidade-input").append(createOption(cidade.id, cidade.nome));
        });
      } else console.log(xhr.responseText);
    }
  };
  xhr.send();
}

$(".cpf-input").mask("000.000.000-00");

var SPMaskBehavior = function (val) {
    return val.replace(/\D/g, "").length === 11 ? "(00) 00000-0000" : "(00) 0000-00009";
  },
  spOptions = {
    onKeyPress: function (val, e, field, options) {
      field.mask(SPMaskBehavior.apply({}, arguments), options);
    },
  };

$(".telefone-input").mask(SPMaskBehavior, spOptions);

function validaCpf(val) {
  if (val.length == 14) {
    var cpf = val.trim();

    cpf = cpf.replace(/\./g, "");
    cpf = cpf.replace("-", "");
    cpf = cpf.split("");

    var v1 = 0;
    var v2 = 0;
    var aux = false;

    for (var i = 1; cpf.length > i; i++) {
      if (cpf[i - 1] != cpf[i]) {
        aux = true;
      }
    }

    if (aux == false) {
      return false;
    }

    for (var i = 0, p = 10; cpf.length - 2 > i; i++, p--) {
      v1 += cpf[i] * p;
    }

    v1 = (v1 * 10) % 11;

    if (v1 == 10) {
      v1 = 0;
    }

    if (v1 != cpf[9]) {
      return false;
    }

    for (var i = 0, p = 11; cpf.length - 1 > i; i++, p--) {
      v2 += cpf[i] * p;
    }

    v2 = (v2 * 10) % 11;

    if (v2 == 10) {
      v2 = 0;
    }

    if (v2 != cpf[10]) {
      return false;
    } else {
      return true;
    }
  } else {
    return false;
  }
}

function validaEmail(email) {
  const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}
// Nome
$(".input").on("change keydown", function () {
  $(this).parent().removeClass("error");
  $(this).parent().find(".error-message").remove();
});

function validateNome(nome) {
  if (nome.length == 0) {
    $(".nome-input-container").addClass(["active", "error"]);
    $(".nome-input-container").append("<span class='error-message'>Insira seu <b class='b'>nome</b></span>");
    return false;
  } else if (/\d/.test(nome) || /[^a-z\sáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ]/i.test(nome) || nome.length < 2) {
    $(".nome-input-container").addClass("error");
    $(".nome-input-container").append("<span class='error-message'><b class='b'>Nome</b> inválido</span>");
    return false;
  } else return true;
}

// Telefone

function validateTelefone(telefone) {
  if (telefone.length == 0) {
    $(".telefone-input-container").addClass(["active", "error"]);
    $(".telefone-input-container").append("<span class='error-message'>Insira seu <b class='b'>telefone</b></span>");
    return false;
  } else if (telefone.length !== 14 && telefone.length !== 15) {
    $(".telefone-input-container").addClass("error");
    $(".telefone-input-container").append("<span class='error-message'><b class='b'>Telefone</b> inválido</span>");
    return false;
  } else return true;
}

// CPF

function validateCpf(cpf) {
  if (cpf.length == 0) {
    $(".cpf-input-container").addClass(["active", "error"]);
    $(".cpf-input-container").append("<span class='error-message'>Insira seu <b class='b'>CPF</b></span>");
    return false;
  } else if (!validaCpf(cpf)) {
    $(".cpf-input-container").addClass("error");
    $(".cpf-input-container").append("<span class='error-message'><b class='b'>CPF</b> inválido</span>");
    return false;
  } else return true;
}

// EMAIL

function validateEmail(email) {
  if (email.length == 0) {
    $(".email-input-container").addClass(["active", "error"]);
    $(".email-input-container").append("<span class='error-message'>Insira seu <b class='b'>e-mail</b></span>");
    return false;
  } else if (!validaEmail(email)) {
    $(".email-input-container").addClass("error");
    $(".email-input-container").append("<span class='error-message'><b class='b'>E-mail</b> inválido</span>");
    return false;
  } else return true;
}

// Obrigatório

function validateObrigatorio(input) {
  if ($(`.${input}-input`).val() == "" || $(`.${input}-input`).val() == undefined) {
    $(`.${input}-input-container`).addClass("error");
    $(`.${input}-input-container`).append(
      `<span class='error-message'>Insira ${input == "estado" ? "seu" : "sua"} <b class='b'>${input}</b></span>`
    );
    return false;
  }
  return true;
}

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
