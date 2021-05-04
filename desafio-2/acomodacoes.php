<?php include_once 'includes/header.php'; ?>

<?php
$acomodacoes = array(
    array(
        'titulo' => 'Suíte master',
        'descricao' => array(
            'Cama de casal Queen',
            'Frigobar',
            'Varanda com vista pro mar',
            'Banheiro individual',
        ),
        'fotos' => array(
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-1.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-2.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-3.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-4.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-5.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-6.png',
        ),
    ),
    array(
        'titulo' => 'Suíte simples',
        'descricao' => array(
            'Acomodação para duas pessoas ou 1 pessoa (quarto individual)',
            'Cama de casal Queen',
            'Frigobar',
            'Banheiro individual',
        ),
        'fotos' => array(
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-2.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-1.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-3.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-4.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-5.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-6.png',
        ),
    ),
    array(
        'titulo' => 'Quarto coletivo com 3 beliches',
        'descricao' => array(
            'Acomodação coletiva para até 6 pessoas',
            '3 beliches',
            'Frigobar',
            'Locker no quarto com 1 armazenamento para cada pessoa',
        ),
        'fotos' => array(
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-3.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-1.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-2.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-4.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-5.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-6.png',
        ),
    ),
    array(
        'titulo' => 'Quarto coletivo feminino com 3 beliches',
        'descricao' => array(
            'Acomodação coletiva de até 6 pessoas',
            '3 beliches',
            'Frigobar',
            'Locker no quarto com 1 armazenamento para cada pessoa',
            'Banheiro coletivo no quarto com 1 sanitário privativo',
            '1 chuveiro com vestiário',
        ),
        'fotos' => array(
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-4.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-1.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-2.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-3.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-5.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-6.png',
        ),
    ),
    array(
        'titulo' => 'Quarto de coletivo com acessibilidade',
        'descricao' => array(
            'Acomodação coletiva de até 6 pessoas',
            '3 beliches',
            'Frigobar',
            'Locker no quarto com 1 armazenamento para cada pessoa',
            'Banheiro coletivo no quarto com 1 sanitário e chuveiro com acessibilidade para deficiente',
            '1 chuveiro coletivo sem acessibilidade',
            '1 sanitário privativo com porta',
        ),
        'fotos' => array(
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-5.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-1.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-2.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-3.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-4.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-6.png',
        ),
    ),
    array(
        'titulo' => 'Quarto coletivo com 4 beliches',
        'descricao' => array(
            'Acomodação coletiva para até 8 pessoas',
            '4 beliches',
            'Frigobar',
            'Locker no quarto com 1 armazenamento para cada pessoa',
        ),
        'fotos' => array(
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-6.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-1.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-2.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-3.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-4.png',
            $GLOBALS['home_url'] . '/public/img/acomodacoes/acomodacao-5.png',
        ),
        'observacao' => 'No caso dos quartos coletivos com 3 e 4 beliches ambos terão 1 banheiro coletivo entre os dois para uso de ambos, segue descrição do banheiro:',
        'lista-titulo' => 'Banheiro coletivo (dois banheiros coletivos, hum para cada 2 quartos):',
        'lista' => array(
            '2 chuveiros com vestiários embutidos',
            '1 sanitário privativo com porta',
            '1 pia dupla com espelho',
            '1 mictório',
        ),
    ),
);
?>

<main class="pagina-acomodacoes">
    <h2 class="titulo">Acomodações</h2>

    <ul class="listagem">

        <?php
        $interacao = 0;
        foreach ($acomodacoes as $acomodacao) :
        ?>
            <li class="acomodacao">
                <div class="esquerda">
                    <div class="acomodacao-slider-principal" data-interacao="<?= ++$interacao ?>">
                        <?php foreach ($acomodacao['fotos'] as $foto) : ?>
                            <div class="acomodacao-slider-principal-item">
                                <img src="<?= $foto ?>" alt="<?= $acomodacao['titulo'] ?>">
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="acomodacao-slider-secundario" data-interacao="<?= $interacao ?>">
                        <?php
                        $fotoIndex = 0;
                        foreach ($acomodacao['fotos'] as $foto) :
                        ?>
                            <a href="#" data-interacao="<?= $interacao ?>" data-slide="<?= $fotoIndex++ ?>">
                                <img src="<?= $foto ?>" alt="<?= $acomodacao['titulo'] ?>">
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="direita">
                    <div class="topo">
                        <h3 class="subtitulo"><?= $acomodacao['titulo'] ?></h3>
                        <ul class="descricao">
                            <?php foreach ($acomodacao['descricao'] as $item) : ?>
                                <li class="item"><?= $item ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php if (isset($acomodacao['observacao'])) : ?>
                            <span class="observacao"><b class="bold">Obs.:</b> <?= $acomodacao['observacao'] ?></span>
                            <span class="lista-titulo"><?= $acomodacao['lista-titulo'] ?></span>
                            <ul class="lista">
                                <?php foreach ($acomodacao['lista'] as $item) : ?>
                                    <li class="item"><?= $item ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                    <a href="<?= $GLOBALS['contato_url'] ?>" class="botao">Reservar agora</a>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</main>

<?php include_once 'includes/footer.php'; ?>