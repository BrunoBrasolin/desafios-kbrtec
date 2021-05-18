<?php
$fotos = array(
    array(
        'titulo' => 'Estande Planejada',
        'url' => 'public/img/estante-planejada.png',
    ),
    array(
        'titulo' => 'Sala Planejada',
        'url' => 'public/img/sala-planejada.png',
    ),
    array(
        'titulo' => 'Sala Planejada',
        'url' => 'public/img/sala-planejada.jpg',
    ),
    array(
        'titulo' => 'Cozinha Planejada',
        'url' => 'public/img/cozinha-planejada.jpg',
    ),
    array(
        'titulo' => 'Estande Planejada',
        'url' => 'public/img/estante-planejada.png',
    ),
    array(
        'titulo' => 'Sala Planejada',
        'url' => 'public/img/sala-planejada.png',
    ),
    array(
        'titulo' => 'Sala Planejada',
        'url' => 'public/img/sala-planejada.jpg',
    ),
    array(
        'titulo' => 'Cozinha Planejada',
        'url' => 'public/img/cozinha-planejada.jpg',
    ),
);
?>


<section class="sobre">
    <div class="linha">
        <div class="esquerda">
            <h3 class="subtitulo">Bem vindo ao House & Hostel</h3>
            <h2 class="titulo">Um lugar para relaxar</h2>
            <p class="texto">
                Cuidadosamente planejado em uma área de mais de 130 mil m², com exuberantes jardins de inspiração oriental, proporciona o clima de paz e tranquilidade ideal para fugir do stress da vida moderna.
                <br />
                <br />
                Para quem procura um Hotel em meio à natureza com segurança e boa gastronomia contamos com uma completa infra estrutura, 96 amplas suítes com sacada privativa, uma área social de 400m², espaço para eventos com salas de convenções para até 350 pessoas, restaurante com cozinha contemporânea, piscinas, centro fitness e as instalações do SPA com massagens, terapias, estética, hidromassagem e sauna.
            </p>

            <h3 class="estrutura">Conheça Nossa Estrutura</h3>
        </div>

        <div class="direita">
            <img src="public/img/sobre-nos.png" alt="Sobre nós | House & Hostel" title="Sobre nós | House & Hostel">
        </div>
    </div>

    <div class="estrutura-slider">
        <?php foreach ($fotos as $foto) : ?>
            <div class="estrutura-item">
                <img src="<?= $foto['url'] ?>" alt="<?= $foto['titulo'] ?> | House & Hostel">
                <div class="texto">
                    <h4 class="titulo">House & Hostel</h4>
                    <a href="<?= $GLOBALS['fotos_url'] ?>" class="botao">Ver fotos</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>