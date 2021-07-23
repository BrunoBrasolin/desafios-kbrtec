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
}); // Home

if (document.querySelector(".home-page")) {
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
  document.querySelectorAll(".glide-noticias .glide__slide").forEach(function (slide, index) {
    var button = document.createElement("button");
    button.setAttribute("data-glide-dir", "=".concat(index));
    button.classList.add("glide__bullet");
    document.querySelector(".glide-noticias .glide__bullets").appendChild(button);
  });
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
} // FAQ


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
} // Blog & Descontos


if (document.querySelector(".blog-page") || document.querySelector(".descontos-page")) {
  var searchParams = new URLSearchParams(window.location.search);
  document.querySelector('.input[name="pesquisa"]').value = searchParams.get("pesquisa");
  document.querySelectorAll(".custom-select option").forEach(function (option) {
    if (option.value === searchParams.get("categoria")) {
      option.selected = true;
    }
  });
}

if (document.querySelector(".descontos_integra-page")) {
  var cep = document.querySelector(".cep").innerHTML;
  document.querySelector(".cep").innerHTML = "".concat(cep.slice(0, 5), "-").concat(cep.slice(5));
  var site = document.querySelector(".site-text").innerHTML;
  document.querySelector(".site-text").innerHTML = site.replace("https://", "").replace("http://", "").replace("www.", "").replace(site.charAt(site.length - 1) == "/" ? "/" : "", "");
}