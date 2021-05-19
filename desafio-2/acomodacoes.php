<?php
$nomePagina = 'Acomodações';
include_once 'includes/header.php';
?>

<?php require_once 'includes/acomodacoes.php'; ?>

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
                    <a href="<?= $GLOBALS['contato_url'] ?>?acomodacao=<?= $acomodacao['id'] ?>" class="botao">Reservar agora</a>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</main>

<?php include_once 'includes/footer.php'; ?>