<?php
$posts = array(
    array(
        'titulo' => 'O verão está chegando, Que tal vista para o mar?',
        'descricao' => 'Phasellus portasce susct vus mi. Cum sociis nat pentibus et magnis dis parturient montnascetur  ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio gravida atcursus nec luctus a lorem Maecenas. tristique orci ac sem. Mauris fermentum dictum magna. Sed laoreet aliquam leo.',
        'imagem' => 'public/img/blog/blog-1.png',
        'data' => '13/08/2018',
    ),
    array(
        'titulo' => 'Principais Bares e Restaurantes em Santos',
        'descricao' => 'Phasellus portasce susct vus mi. Cum sociis nat pentibus et magnis dis parturient montnascetur  ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio gravida atcursus nec luctus a lorem Maecenas. tristique orci ac sem. Mauris fermentum dictum magna. Sed laoreet aliquam leo.',
        'imagem' => 'public/img/blog/blog-2.png',
        'data' => '13/08/2018',
    ),
    array(
        'titulo' => 'Economia na Hora de Hospedar sua Família',
        'descricao' => 'Phasellus portasce susct vus mi. Cum sociis nat pentibus et magnis dis parturient montnascetur  ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio gravida atcursus nec luctus a lorem Maecenas. tristique orci ac sem. Mauris fermentum dictum magna. Sed laoreet aliquam leo.',
        'imagem' => 'public/img/blog/blog-3.png',
        'data' => '13/08/2018',
    ),
    array(
        'titulo' => 'Como avaliar os serviços de um bom hotel para se hospedar?',
        'descricao' => 'Phasellus portasce susct vus mi. Cum sociis nat pentibus et magnis dis parturient montnascetur  ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio gravida atcursus nec luctus a lorem Maecenas. tristique orci ac sem. Mauris fermentum dictum magna. Sed laoreet aliquam leo.',
        'imagem' => 'public/img/blog/blog-4.png',
        'data' => '13/08/2018',
    ),
);

function getPostLink($postName)
{
    return
        strtolower(str_replace(array(' ', ',', '.'), array('-', ''), preg_replace(array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/", "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/", "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/"), explode(" ", "a A e E i I o O u U n N"), $postName)));
}
?>


<?php include_once 'includes/header.php'; ?>

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
                            <a class="link link-facebook" href="https://facebook.com" target="_blank" title="Facebook | House e Hostel">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="link link-instagram" href="https://instagram.com" target="_blank" title="Instagram | House e Hostel">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>

                    <div class="direita">
                        <span class="data"><?= $post['data'] ?></span>
                        <h3 class="post-titulo"><?= $post['titulo'] ?></h3>
                        <p class="descricao"><?= $post['descricao'] ?></p>
                        <a href="<?= $GLOBALS['blog-integra_url'] ?>/<?= getPostLink($post['titulo']) ?>" class="link">
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