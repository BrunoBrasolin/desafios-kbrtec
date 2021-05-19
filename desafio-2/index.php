<?php
$nomePagina = 'Home';
include_once 'includes/header.php';
?>

<main role="main" class="main-home">
    <section class="banner">
        <div class="banner-slider">
            <div class="banner-item">
                <img src="public/img/banner-1.png" class="imagem-fundo" alt="House & Hostel">
                <div class="conteudo">
                    <h2 class="subtitulo">Seja bem vindo</h2>
                    <h1 class="titulo">Reserve sua hospedagem<br />em Guarujá</h1>
                    <a href="<?= $GLOBALS['contato_url'] ?>" class="link" title="Clique e faça sua reserva">Clique e faça sua reserva</a>
                </div>
            </div>
            <div class="banner-item">
                <img src="public/img/banner-1.png" class="imagem-fundo" alt="House & Hostel">
                <div class="conteudo">
                    <h2 class="subtitulo">Seja bem vindo</h2>
                    <h1 class="titulo">Reserve sua hospedagem<br />em Praia Grande</h1>
                    <a href="<?= $GLOBALS['contato_url'] ?>" class="link" title="Clique e faça sua reserva">Clique e faça sua reserva</a>
                </div>
            </div>
        </div>
    </section>

    <section class="acomodacoes">
        <div class="acomodacoes-conteudo">
            <h2 class="titulo">Nossas Acomodações</h2>

            <ul class="lista">
                <li class="item">
                    <img src="public/img/suite-master.png" class="imagem" alt="Suíte Master">
                    <div class="inferior">
                        <div class="conteudo">
                            <h3 class="subtitulo">Suíte Master</h3>
                            <p class="texto">
                                Cama de casal Queen, Frigobar
                                Varanda com vista pro mar
                                Banheiro individual
                            </p>
                            <a href="<?= $GLOBALS['contato_url'] ?>?acomodacao=1" class="link">Reservar</a>
                        </div>
                    </div>
                </li>

                <li class="item">
                    <img src="public/img/suite-simples.png" class="imagem" alt="Suíte Simples">
                    <div class="inferior">
                        <div class="conteudo">
                            <h3 class="subtitulo">Suíte Simples</h3>
                            <p class="texto">
                                Acomodação para duas pessoas (casal)
                                ou 1 pessoa (quarto individual)
                                Cama de casal Queen, Frigobar, 
                                Banheiro individual
                            </p>
                            <a href="<?= $GLOBALS['contato_url'] ?>?acomodacao=2" class="link">Reservar</a>
                        </div>
                    </div>
                </li>

                <li class="item">
                    <img src="public/img/quarto-coletivo.png" class="imagem" alt="Quarto Coletivo">
                    <div class="inferior">
                        <div class="conteudo">
                            <h3 class="subtitulo">Quarto Coletivo</h3>
                            <p class="texto">
                                Acomodação coletiva para até 6
                                pessoas 3 beliches, Frigobar Locker no
                                quarto com 1 armazenamento
                                para cada pessoa
                            </p>
                            <a href="<?= $GLOBALS['contato_url'] ?>?acomodacao=3" class="link">Reservar</a>
                        </div>
                    </div>
                </li>
            </ul>

            <a href="<?= $GLOBALS['acomodacoes_url'] ?>" class="botao" title="Mais acomodações">Mais acomodações</a>
        </div>
    </section>

    <?php include_once 'includes/sobre.php'; ?>

    <?php include_once 'includes/bloco-contato.php'; ?>
</main>


<?php include_once 'includes/footer.php'; ?>