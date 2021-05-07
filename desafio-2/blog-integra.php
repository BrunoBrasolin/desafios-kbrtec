<?php include_once 'includes/header.php'; ?>

<?php
$leiaMais = array(
    array(
        'imagem' => $GLOBALS['home_url'] . '/public/img/blog/leia-1.png',
        'titulo' => 'O verão está chegando, Que tal vista para o mar?'
    ),
    array(
        'imagem' => $GLOBALS['home_url'] . '/public/img/blog/leia-2.png',
        'titulo' => 'Principais Bares e Restaurantes em Santos'
    ),
    array(
        'imagem' => $GLOBALS['home_url'] . '/public/img/blog/leia-3.png',
        'titulo' => 'Economia na Hora de Hospedar sua Família'
    ),
    array(
        'imagem' => $GLOBALS['home_url'] . '/public/img/blog/leia-4.png',
        'titulo' => 'Como avaliar os serviços de um bom hotel para se hospedar?'
    ),
);
?>

<main class="pagina-integra">
    <article class="conteudo">
        <span class="data">13/08/2018</span>

        <h2 class="titulo">Como avaliar os serviços de um bom hotel para se hospedar?</h2>
        <div class="redes-sociais">
            <a class="link link-facebook" href="https://facebook.com" target="_blank" title="Facebook | House e Hostel">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a class="link link-instagram" href="https://instagram.com" target="_blank" title="Instagram | House e Hostel">
                <i class="fab fa-instagram"></i>
            </a>
        </div>

        <img class="banner" src="<?= $GLOBALS['home_url'] ?>/public/img/blog/blog-integra.png" alt="Como avaliar os serviços de um bom hotel para se hospedar? | House & Hostel" title="Como avaliar os serviços de um bom hotel para se hospedar? | House & Hostel">

        <section class="texto">
            <p class="paragrafo">
                Viajar é uma das melhores maneiras de descansar e curtir a família, mas para isso é importante acertar na escolha da hospedagem.
                Se essa é a sua dúvida, não se preocupe, pois neste post vamos apresentar os pontos que fazem a diferença na hora de avaliar
                os serviços de um bom hotel.
            </p>

            <p class="paragrafo">
                Encontrar funcionários simpáticos, quartos confortáveis, boa infraestrutura e um delicioso café da manhã são alguns dos detalhes
                que podem transformar uma viagem comum em uma experiência realmente memorável. Continue a leitura e saiba mais sobre
                o assunto.
            </p>

            <ol class="lista">
                <li class="item">
                    <h3 class="subtitulo">Bom atendimento</h3>
                    <p class="paragrafo">A melhor forma de saber se um hotel oferece um bom atendimento é ler as avaliações feitas por outros viajantes. Dessa forma você garante que encontrará uma equipe bem preparada e disposta a proporcionar dias especiais aos hóspedes.</p>
                </li>
                <li class="item">
                    <h3 class="subtitulo">Relação custo-benefício</h3>
                    <p class="paragrafo">Opte por hospedagens que ofereçam fácil acesso a pontos turísticos, restaurantes e atividades que forem do seu interesse. Estar em um hotel bem localizado pode até mesmo reduzir o custo da sua viagem.</p>
                </li>
                <li class="item">
                    <h3 class="subtitulo">Infraestrutura</h3>
                    <p class="paragrafo">Ao avaliar os serviços de um bom hotel também é preciso levar em conta a sua infraestrutura. Verifique se o hotel dispõe de um restaurante próprio, de garagem, piscina e outras comodidades que podem tornar a sua viagem mais confortável e bem aproveitada.</p>
                </li>
            </ol>
        </section>
    </article>

    <div class="leia-tambem">
        <h2 class="subtitulo">
            <i class="far fa-file-alt"></i>
            Leia também
        </h2>
        <section class="linha">
            <?php foreach ($leiaMais as $post) : ?>
                <article class="post">
                    <a href="<?= $GLOBALS['blog-integra_url'] ?>/<?= getPostLink($post['titulo']) ?>" class="link">
                        <img src="<?= $post['imagem'] ?>" alt="<?= $post['titulo'] ?> | House & Hostel ">
                    </a>
                    <h3 class="post-titulo"><?= $post['titulo'] ?></h3>
                    <a href="<?= $GLOBALS['blog-integra_url'] ?>/<?= getPostLink($post['titulo']) ?>" class="link">
                        <i class="fas fa-plus-circle fa-lg"></i>
                    </a>
                </article>
            <?php endforeach; ?>
        </section>
    </div>
</main>


<?php include_once 'includes/footer.php'; ?>