<?php require_once 'config.php'; ?>

<?php $segment = basename(dirname((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}")); ?>
<?php include_once 'includes/header.php'; ?>
<?php require_once 'includes/acomodacoes.php'; ?>

<main class="contato-obrigado-pagina">
    <section class="conteudo">
        <?php if ($segment == 'reserva') : ?>
            <h2 class="titulo">Você realizou um pedido de reserva com os seguintes dados</h2>

            <section class="acomodacao">
                <div class="esquerda">
                    <img alt="House && Hostel" id="acomodacao-imagem">
                </div>
                <div class="direita">
                    <ul class="detalhes">
                        <li class="detalhes-item"><strong>Acomodação:</strong> <span id="acomodacao"></span></li>
                        <li class="detalhes-item"><strong>Descrição:</strong>
                            <ul id="descricao">
                            </ul>
                        </li>
                        <li class="detalhes-item"><strong>Check-in:</strong> <span id="checkin"></span></li>
                        <li class="detalhes-item"><strong>Check-out:</strong> <span id="checkout"></span></li>
                    </ul>
                </div>
            </section>
            <section class="agradecimento">
                <h3 class="subtitulo">Esse pedido foi enviado com sucesso, e assim que possível entraremos em contato!</h3>
                <p>Obrigado pela preferência</p>
            </section>
        <?php elseif ($segment == 'informacoes' || $segment == 'duvidas') : ?>
            <h2 class="titulo mensagem">Suas dúvidas foram enviadas com sucesso!</h2>
            <p>
                Assim que possível retornaremos o seu contato para esse email:
                <strong id="email"></strong> com mais informações.
            </p>

        <?php endif; ?>
    </section>
</main>

<script>
    if (document.querySelector("#email"))
        document.querySelector("#email").innerHTML = JSON.parse(localStorage.getItem("data")).email;
    else {
        let acomodacoes = <?= json_encode($acomodacoes) ?>;
        let acomodacao = acomodacoes.find(acomodacao => acomodacao.id == JSON.parse(localStorage.getItem("data")).acomodacao);
        console.log(JSON.parse(localStorage.getItem("data")).acomodacao, acomodacao);
        document.querySelector("#acomodacao").innerHTML = acomodacao.titulo;
        acomodacao.descricao.map(item => {
            let li = document.createElement("li");
            li.innerHTML = item;
            li.classList.add("descricao-item");
            document.querySelector("#descricao").appendChild(li);
        })
        document.querySelector("#acomodacao-imagem").setAttribute("src", acomodacao.fotoPrincipal)
        document.querySelector("#checkin").innerHTML = JSON.parse(localStorage.getItem("data")).checkin;
        document.querySelector("#checkout").innerHTML = JSON.parse(localStorage.getItem("data")).checkout;
    }
</script>

<?php include_once 'includes/footer.php'; ?>