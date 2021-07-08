"use strict";

feather.replace();
document.querySelectorAll(".phone .group").forEach(function (group) {
  return group.addEventListener("click", function () {
    document.querySelectorAll(".phone .group").forEach(function (group) {
      group.classList.remove("active");
    });
    this.classList.add("active");
  });
});
var glideConveniadosConfig = {
  type: 'carousel',
  perView: 3,
  gap: 15
};
new Glide(".glide-conveniados", glideConveniadosConfig).mount();
var glideNoticiasConfig = {
  type: 'slider',
  perView: 3,
  gap: 20,
  infinite: false
};
new Glide(".glide-noticias", glideNoticiasConfig).mount();
var glideDescontosConfig = {
  type: 'slider',
  perView: 1,
  infinite: false
};
new Glide(".glide-descontos", glideDescontosConfig).mount();