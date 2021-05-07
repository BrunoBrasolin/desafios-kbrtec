<?php include_once 'includes/header.php'; ?>
<?php require_once 'includes/posts.php'; ?>

<?php
$uri_segments = explode('/', $_SERVER['REQUEST_URI']);
$postId = $uri_segments[4];
foreach ($posts as $post)
    if ($post['id'] == $postId)
        break;
?>



<main class="pagina-integra">
    <article class="conteudo">
        <span class="data">13/08/2018</span>

        <h2 class="titulo"><?= $post['titulo'] ?></h2>
        <div class="redes-sociais">
            <a class="link link-facebook" href="https://facebook.com" target="_blank" title="Facebook | House e Hostel">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a class="link link-instagram" href="https://instagram.com" target="_blank" title="Instagram | House e Hostel">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
        <div class="banner">
            <img src="<?= $post['imagem'] ?>" alt="<?= $post['titulo'] ?> | House & Hostel" title="Como avaliar os serviços de um bom hotel para se hospedar? | House & Hostel">
        </div>

        <section class="texto">
            <?= $post['texto'] ?>
        </section>
    </article>

    <div class="leia-tambem">
        <h2 class="subtitulo">
            <i class="far fa-file-alt"></i>
            Leia também
        </h2>
        <section class="linha">
            <?php foreach ($posts as $post) : ?>
                <article class="post">
                    <a href="<?= getPostLink($post['id'], $post['titulo']) ?>" class="link">
                        <img src="<?= $post['imagem'] ?>" alt="<?= $post['titulo'] ?> | House & Hostel ">
                    </a>
                    <h3 class="post-titulo"><?= $post['titulo'] ?></h3>
                    <a href="<?= getPostLink($post['id'], $post['titulo']) ?>" class="link">
                        <i class="fas fa-plus-circle fa-lg"></i>
                    </a>
                </article>
            <?php endforeach; ?>
        </section>
    </div>
</main>


<?php include_once 'includes/footer.php'; ?>