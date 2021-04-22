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
