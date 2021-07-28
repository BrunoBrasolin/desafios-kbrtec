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
var xhr = new XMLHttpRequest();

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(setLocation);
  } else {
    console.log("Não suporta");
  }
}

function setLocation(position) {
  var appID = "dc434a23daedb9ef257f2f93954ee237";
  var units = "metric";
  var lang = "pt_br"; // const latitude = position.coords.latitude ;
  // const longitude = position.coords.longitude ;

  var latitude = "23.9592";
  var longitude = "46.3318";
  var url = "https://api.openweathermap.org/data/2.5/weather?lat=".concat(latitude, "&lon=").concat(longitude, "&appid=").concat(appID, "&units=").concat(units, "&lang=").concat(lang);
  xhr.open("GET", url);

  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var response = JSON.parse(xhr.responseText);
      document.querySelector(".weather-min").innerHTML = response.main.temp_min;
      document.querySelector(".weather-max").innerHTML = response.main.temp_max;
    }
  };

  xhr.send();
}

window.addEventListener("load", function (event) {
  // getLocation();
  setLocation();
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
    infinite: false,
    breakpoints: {
      877: {
        perView: 2
      },
      550: {
        perView: 1
      }
    }
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
} // Descontos Integra


if (document.querySelector(".descontos_integra-page")) {
  var htmlCep = document.querySelector(".cep");

  if (htmlCep) {
    var cep = htmlCep.innerHTML;
    htmlCep.innerHTML = "".concat(cep.slice(0, 5), "-").concat(cep.slice(5));
  }

  var htmlWhatsapp = document.querySelector(".whatsapp_numero");

  if (htmlWhatsapp) {
    var whatsapp = htmlWhatsapp.innerHTML;
    whatsapp.length == 10 ? document.querySelector(".whatsapp_numero").innerHTML = "(".concat(whatsapp.slice(0, 2), ") ").concat(whatsapp.slice(2, 6), "-").concat(whatsapp.slice(6)) : document.querySelector(".whatsapp_numero").innerHTML = "(".concat(whatsapp.slice(0, 2), ") ").concat(whatsapp.slice(2, 7), "-").concat(whatsapp.slice(7));
  }

  var htmlPhone = document.querySelector(".phone_numero");

  if (htmlPhone) {
    var phone = htmlPhone.innerHTML;
    phone.length == 10 ? htmlPhone.innerHTML = "(".concat(phone.slice(0, 2), ") ").concat(phone.slice(2, 6), "-").concat(phone.slice(6)) : htmlPhone.innerHTML = "(".concat(phone.slice(0, 2), ") ").concat(phone.slice(2, 7), "-").concat(phone.slice(7));
  }

  var htmlSite = document.querySelector(".site-text");

  if (htmlSite) {
    var site = htmlSite.innerHTML;
    htmlSite.innerHTML = site.replace("https://", "").replace("http://", "").replace("www.", "").replace(site.charAt(site.length - 1) == "/" ? "/" : "", "");
  }

  var glideFotosConfig = {
    type: "carousel",
    perView: 1,
    gap: 20,
    infinite: false
  };
  var glideFotos = new Glide(".glide-fotos", glideFotosConfig).mount();
  var glideFotosNavConfig = {
    type: "carousel",
    perView: 6,
    gap: 20,
    infinite: false,
    breakpoints: {
      877: {
        perView: 4
      },
      550: {
        perView: 2
      }
    }
  };
  var glideFotosNav = new Glide(".glide-fotos-nav", glideFotosNavConfig).mount();
  glideFotos.on("run", function (e) {
    return glideFotosNav.go(e.direction);
  });
  glideFotosNav.on("run", function (e) {
    return glideFotos.go(e.direction);
  });
}