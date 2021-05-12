<?php include_once 'includes/header.php'; ?>
<?php require_once 'includes/posts.php'; ?>

<main class="pagina-blog">
    <section class="conteudo">
        <header class="linha">
            <h2 class="titulo">Blog</h2>
            <form class="form">
                <input type="text" placeholder="Digite uma palavra chave">
                <button type="submit">Buscar</button>
            </form>
        </header>

        <section class="posts">
            <?php foreach ($posts as $post) : ?>
                <article class="post">
                    <div class="esquerda">
                        <img src="<?= $post['imagem'] ?>" alt="<?= $post['titulo'] ?> | House & Hostel" title="<?= $post['titulo'] ?> | House & Hostel">
                        <div class="redes-sociais">
                            <a class="link link-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?= getPostLink($post['id'], $post['titulo']) ?>&amp;src=sdkpreparse" target="_blank" title="Facebook | House e Hostel">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="link link-twitter" href="https://twitter.com/intent/tweet?hashtags=houseehostel&original_referer=<?= getPostLink($post['id'], $post['titulo']) ?>&ref_src=twsrc%5Etfw&related=twitterapi%2Ctwitter&tw_p=tweetbutton&url=<?= getPostLink($post['id'], $post['titulo']) ?>&text=<?= $post['titulo'] ?>" target="_blank" title="Instagram | House e Hostel">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="link link-whatsapp" href="https://api.whatsapp.com/send?text=<?= getPostLink($post['id'], $post['titulo']) ?>" target="_blank" title="Instagram | House e Hostel">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>

                    <div class="direita">
                        <span class="data"><?= $post['data'] ?></span>
                        <h3 class="post-titulo"><?= $post['titulo'] ?></h3>
                        <p class="descricao"><?= $post['descricao'] ?></p>
                        <a href="<?= getPostLink($post['id'], $post['titulo']) ?>" class="link">
                            Continue lendo
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </section>

        <section class="paginacao">
            <a href="#" class="anterior acao">Anterior</a>
            <a href="#" class="numero">1</a>
            <a href="#" class="numero ativo">2</a>
            <a href="#" class="numero">3</a>
            <a href="#" class="anterior acao">Próximo</a>
        </section>

    </section>
</main>

<?php include_once 'includes/footer.php'; ?>