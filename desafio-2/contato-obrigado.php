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
                        <li class="detalhes-item"><strong>Check-in e check-out:<br></strong> <span id="datas"></span></li>
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

<?php include_once 'includes/footer.php'; ?>