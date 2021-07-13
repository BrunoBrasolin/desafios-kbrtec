"use strict";

feather.replace();
document.querySelector(".navbar .icon").addEventListener("click", function () {
  var items = document.querySelectorAll(".navbar .navbar-list, .navbar .right");
  items.forEach(function (item) {
    if (item.classList.contains("active")) {
      item.classList.remove("active");
      item.classList.remove("overflow");
    } else {
      item.classList.add("active");
      setTimeout(function () {
        item.classList.add("overflow");
      }, 300);
    }
  });
});
document.querySelectorAll(".phone .group").forEach(function (group) {
  return group.addEventListener("click", function () {
    document.querySelectorAll(".phone .group").forEach(function (group) {
      group.classList.remove("active");
    });
    this.classList.add("active");
  });
});
var glideConveniadosConfig = {
  type: "carousel",
  perView: 3,
  gap: 15,
  breakpoints: {
    877: {
      perView: 2
    },
    550: {
      perView: 1
    }
  }
};
new Glide(".glide-conveniados", glideConveniadosConfig).mount();
var glideNoticiasConfig = {
  type: "slider",
  perView: 3,
  gap: 20,
  infinite: false
};
new Glide(".glide-noticias", glideNoticiasConfig).mount();
var glideDescontosConfig = {
  type: "slider",
  perView: 1,
  infinite: false
};
new Glide(".glide-descontos", glideDescontosConfig).mount();