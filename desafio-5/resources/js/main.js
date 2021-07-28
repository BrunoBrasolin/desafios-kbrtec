feather.replace();

document.querySelector(".navbar .icon").addEventListener("click", () => {
  const items = document.querySelectorAll(
    ".navbar .navbar-list, .navbar .right"
  );

  items.forEach((item) => {
    if (item.classList.contains("waiting")) return;

    if (item.classList.contains("active")) {
      item.classList.remove("active");
      item.classList.remove("overflow");
    } else {
      item.classList.add("active");
      item.classList.add("waiting");
      setTimeout(() => {
        item.classList.add("overflow");
        item.classList.remove("waiting");
      }, 300);
    }
  });
});

const xhr = new XMLHttpRequest();

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(setLocation);
  } else {
    console.log("Não suporta");
  }
}

function setLocation(position) {
  const appID = "dc434a23daedb9ef257f2f93954ee237";
  const units = "metric";
  const lang = "pt_br";
  // const latitude = position.coords.latitude ;
  // const longitude = position.coords.longitude ;
  const latitude = "23.9592";
  const longitude = "46.3318";
  const url = `https://api.openweathermap.org/data/2.5/weather?lat=${latitude}&lon=${longitude}&appid=${appID}&units=${units}&lang=${lang}`;

  xhr.open("GET", url);

  xhr.onreadystatechange = () => {
    if (xhr.readyState == 4 && xhr.status == 200) {
      const response = JSON.parse(xhr.responseText);
      document.querySelector(".weather-min").innerHTML = response.main.temp_min;

      document.querySelector(".weather-max").innerHTML = response.main.temp_max;
    }
  };
  xhr.send();
}

window.addEventListener("load", (event) => {
  // getLocation();
  setLocation();
});

// Home
if (document.querySelector(".home-page")) {
  document.querySelectorAll(".phone .group").forEach((group) =>
    group.addEventListener("click", function () {
      document.querySelectorAll(".phone .group").forEach((group) => {
        group.classList.remove("active");
      });
      this.classList.add("active");
    })
  );

  const glideConveniadosConfig = {
    type: "carousel",
    perView: 3,
    gap: 15,
    breakpoints: {
      877: {
        perView: 2,
      },
      550: {
        perView: 1,
      },
    },
  };

  new Glide(".glide-conveniados", glideConveniadosConfig).mount();

  document
    .querySelectorAll(".glide-noticias .glide__slide")
    .forEach((slide, index) => {
      const button = document.createElement("button");

      button.setAttribute("data-glide-dir", `=${index}`);
      button.classList.add("glide__bullet");

      document
        .querySelector(".glide-noticias .glide__bullets")
        .appendChild(button);
    });
  const glideNoticiasConfig = {
    type: "slider",
    perView: 3,
    gap: 20,
    infinite: false,
    breakpoints: {
      877: {
        perView: 2,
      },
      550: {
        perView: 1,
      },
    },
  };

  new Glide(".glide-noticias", glideNoticiasConfig).mount();

  const glideDescontosConfig = {
    type: "slider",
    perView: 1,
    infinite: false,
  };

  new Glide(".glide-descontos", glideDescontosConfig).mount();
}

// FAQ
if (document.querySelector(".faq-page")) {
  document.querySelectorAll(".faq-item").forEach((item) =>
    item.addEventListener("click", function () {
      if (this.classList.contains("active")) {
        this.classList.remove("active");
        return;
      }

      document.querySelectorAll(".faq-item").forEach((i) => {
        i.classList.remove("active");
      });

      this.classList.add("active");
    })
  );
}

// Inputs
if (document.querySelector(".input")) {
  document.querySelectorAll(".input").forEach((input) => {
    input.addEventListener("focus", function () {
      this.classList.add("active");
    });

    input.addEventListener("blur", function () {
      this.classList.remove("active");
    });
  });
}

// Blog & Descontos
if (
  document.querySelector(".blog-page") ||
  document.querySelector(".descontos-page")
) {
  const searchParams = new URLSearchParams(window.location.search);

  document.querySelector('.input[name="pesquisa"]').value =
    searchParams.get("pesquisa");

  document.querySelectorAll(".custom-select option").forEach((option) => {
    if (option.value === searchParams.get("categoria")) {
      option.selected = true;
    }
  });
}

// Descontos Integra

if (document.querySelector(".descontos_integra-page")) {
  const htmlCep = document.querySelector(".cep");
  if (htmlCep) {
    const cep = htmlCep.innerHTML;
    htmlCep.innerHTML = `${cep.slice(0, 5)}-${cep.slice(5)}`;
  }

  const htmlWhatsapp = document.querySelector(".whatsapp_numero");
  if (htmlWhatsapp) {
    const whatsapp = htmlWhatsapp.innerHTML;
    whatsapp.length == 10
      ? (document.querySelector(
          ".whatsapp_numero"
        ).innerHTML = `(${whatsapp.slice(0, 2)}) ${whatsapp.slice(
          2,
          6
        )}-${whatsapp.slice(6)}`)
      : (document.querySelector(
          ".whatsapp_numero"
        ).innerHTML = `(${whatsapp.slice(0, 2)}) ${whatsapp.slice(
          2,
          7
        )}-${whatsapp.slice(7)}`);
  }

  const htmlPhone = document.querySelector(".phone_numero");
  if (htmlPhone) {
    const phone = htmlPhone.innerHTML;

    phone.length == 10
      ? (htmlPhone.innerHTML = `(${phone.slice(0, 2)}) ${phone.slice(
          2,
          6
        )}-${phone.slice(6)}`)
      : (htmlPhone.innerHTML = `(${phone.slice(0, 2)}) ${phone.slice(
          2,
          7
        )}-${phone.slice(7)}`);
  }

  const htmlSite = document.querySelector(".site-text");
  if (htmlSite) {
    const site = htmlSite.innerHTML;

    htmlSite.innerHTML = site
      .replace("https://", "")
      .replace("http://", "")
      .replace("www.", "")
      .replace(site.charAt(site.length - 1) == "/" ? "/" : "", "");
  }

  const glideFotosConfig = {
    type: "carousel",
    perView: 1,
    gap: 20,
    infinite: false,
  };

  const glideFotos = new Glide(".glide-fotos", glideFotosConfig).mount();

  const glideFotosNavConfig = {
    type: "carousel",
    perView: 6,
    gap: 20,
    infinite: false,
    breakpoints: {
      877: {
        perView: 4,
      },
      550: {
        perView: 2,
      },
    },
  };

  const glideFotosNav = new Glide(
    ".glide-fotos-nav",
    glideFotosNavConfig
  ).mount();

  glideFotos.on("run", (e) => glideFotosNav.go(e.direction));

  glideFotosNav.on("run", (e) => glideFotos.go(e.direction));
}
