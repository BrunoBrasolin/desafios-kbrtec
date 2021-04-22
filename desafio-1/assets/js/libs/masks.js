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
