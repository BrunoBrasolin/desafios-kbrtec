"use strict";

feather.replace();
document.querySelector(".navbar .icon").addEventListener("click", function () {
  var items = document.querySelectorAll(".navbar .navbar-list, .navbar .right");
  items.forEach(function (item) {
    if (item.classList.contains("waiting")) return;

    if (item.classList.contains("active")) {
      item.classList.remove("active");
      item.classList.remove("overflow");
    } else {
      item.classList.add("active");
      item.classList.add("waiting");
      setTimeout(function () {
        item.classList.add("overflow");
        item.classList.remove("waiting");
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
},
    glideConveniados = document.querySelector(".glide-conveniados");
if (glideConveniados != null) new Glide(".glide-conveniados", glideConveniadosConfig).mount();
var glideNoticiasConfig = {
  type: "slider",
  perView: 3,
  gap: 20,
  infinite: false
},
    glideNoticias = document.querySelector(".glide-noticias");
if (glideNoticias != null) new Glide(".glide-noticias", glideNoticiasConfig).mount();
var glideDescontosConfig = {
  type: "slider",
  perView: 1,
  infinite: false
},
    glideDescontos = document.querySelector(".glide-descontos");
if (glideDescontos != null) new Glide(".glide-descontos", glideDescontosConfig).mount(); // FAQ

if (document.querySelector(".faq-page")) {
  document.querySelectorAll(".faq-item").forEach(function (item) {
    return item.addEventListener("click", function () {
      if (this.classList.contains("active")) {
        this.classList.remove("active");
        return;
      }

      document.querySelectorAll(".faq-item").forEach(function (i) {
        i.classList.remove("active");
      });
      this.classList.add("active");
    });
  });
} // Inputs


if (document.querySelector(".input")) {
  document.querySelectorAll(".input").forEach(function (input) {
    input.addEventListener("focus", function () {
      this.classList.add("active");
    });
    input.addEventListener("blur", function () {
      this.classList.remove("active");
    });
  });
}