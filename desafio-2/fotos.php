<?php
$fotos = array(
    array(
        'tamanho' => 'pequeno',
        'url' => 'public/img/fotos/foto-1.png'
    ),
    array(
        'tamanho' => 'grande',
        'url' => 'public/img/fotos/foto-2.png'
    ),
    array(
        'tamanho' => 'pequeno',
        'url' => 'public/img/fotos/foto-3.png'
    ),
    array(
        'tamanho' => 'pequeno',
        'url' => 'public/img/fotos/foto-4.png'
    ),
    array(
        'tamanho' => 'pequeno',
        'url' => 'public/img/fotos/foto-5.png'
    ),
    array(
        'tamanho' => 'grande',
        'url' => 'public/img/fotos/foto-6.png'
    ),
    array(
        'tamanho' => 'grande',
        'url' => 'public/img/fotos/foto-7.png'
    ),
    array(
        'tamanho' => 'pequeno',
        'url' => 'public/img/fotos/foto-8.png'
    ),
    array(
        'tamanho' => 'pequeno',
        'url' => 'public/img/fotos/foto-9.png'
    ),
);
?>



<?php include_once 'includes/header.php'; ?>

<main class="pagina-fotos">
    <section class="conteudo">
        <h2 class="fotos-titulo">Fotos</h2>
        <section class="fotos">
            <?php foreach ($fotos as $foto) : ?>
                <div class="foto <?= $foto['tamanho'] ?>" data-src="<?= $foto['url'] ?>">
                    <img src="<?= $foto['url'] ?>" alt="Foto | House & Hostel">
                    <div class="texto">
                        <h4 class="titulo">House & Hostel</h4>
                        <buttn type="submit" data-src="<?= $foto['url'] ?>" class="botao">ampliar imagem</buttn>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    </section>
</main>

<?php include_once 'includes/footer.php'; ?>