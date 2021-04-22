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
