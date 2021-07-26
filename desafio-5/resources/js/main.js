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
  const cep = document.querySelector(".cep").innerHTML;
  document.querySelector(".cep").innerHTML = `${cep.slice(0, 5)}-${cep.slice(
    5
  )}`;

  const whatsapp = document.querySelector(".whatsapp_numero").innerHTML;
  const phone = document.querySelector(".phone_numero").innerHTML;

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

  phone.length == 10
    ? (document.querySelector(".phone_numero").innerHTML = `(${phone.slice(
        0,
        2
      )}) ${phone.slice(2, 6)}-${phone.slice(6)}`)
    : (document.querySelector(".phone_numero").innerHTML = `(${phone.slice(
        0,
        2
      )}) ${phone.slice(2, 7)}-${phone.slice(7)}`);

  const site = document.querySelector(".site-text").innerHTML;

  document.querySelector(".site-text").innerHTML = site
    .replace("https://", "")
    .replace("http://", "")
    .replace("www.", "")
    .replace(site.charAt(site.length - 1) == "/" ? "/" : "", "");
}
