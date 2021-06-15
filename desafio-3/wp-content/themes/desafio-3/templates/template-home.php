<?php
// Template name: Página Inicial
?>

<?php get_header(); ?>

<main class="home-page">

  <section class="banner-slider">
    <?php
    $banner_query = new WP_Query(array(
      'post_type' => 'banners_home',
      'posts_per_page' => -1
    ));

    if ($banner_query->have_posts()) : while ($banner_query->have_posts()) : $banner_query->the_post();
    ?>
        <section class="banner-item">
          <img src="<?= get_field('banner_imagem') ?>" alt="Grupo Sartori" title="Grupo Sartori" class="background-image">
          <section class="col left">
            <h2 class="welcome"><?= get_field('banner_bem_vindo') ?></strong>
            </h2>
            <h1 class="title">
              <?= get_the_title() ?>
            </h1>
          </section>

          <section class="col middle">
            <p class="text">Assertividade com retenção de talentos, é a nossa especialidade.</p>
            <div class="button-container">
              <a href="<?= home_url() ?>/para-profissionais" class="button button-yellow">Para profissionais</a>
              <a href="<?= home_url() ?>/para-sua-empresa" class="button button-black">Para sua empresa</a>
            </div>
          </section>

          <section class="col right">
            <span class="arrow banner-prev-arrow">
              <i data-feather="chevron-left">
              </i>
            </span>

            <span class="arrow banner-next-arrow">
              <i data-feather="chevron-right">
              </i>
            </span>
          </section>
        </section>
    <?php endwhile;
    endif; ?>
  </section>

  <section class="encontre">
    <section class="encontre-content">
      <div class="top">
        <span class="icon">
          <i data-feather="search"></i>
        </span>
        <h2 class="title">Encontre vagas por área de especialidade</h2>
      </div>

      <form class="form">
        <div class="input-group">
          <label for="cargo" class="label">Cargo:</label>
          <input type="text" name="cargo" id="cargo" class="input">
        </div>

        <div class="input-group">
          <label for="cidade" class="label">Cidade:</label>
          <input type="text" name="cidade" id="cidade" class="input">
        </div>

        <div class="input-group">
          <label for="estado" class="label">Estado:</label>
          <select type="text" name="estado" id="estado" class="input pequeno estado-input">
            <option value=""></option>
          </select>
        </div>

        <span class="erro"><i data-feather="alert-triangle"></i>Preencha um campo para fazer a filtragem</span>

        <button type="submit" class="button">Filtrar</button>
      </form>
    </section>
  </section>

  <?php $item_query = new WP_Query(array(
    'post_type' => 'item',
    'posts_per_page' => -1,
  )); ?>

  <section class="itens-grandes-slider">
    <?php if ($item_query->have_posts()) : ?>
      <?php while ($item_query->have_posts()) : $item_query->the_post(); ?>
        <section class="item-grande">
          <div class="left">
            <?php if (get_field('icone')) : ?>
              <img src="<?= get_field('icone') ?>" alt="<?= get_the_title() ?> | Grupo Sartori" title="<?= get_the_title() ?> | Grupo Sartori">
            <?php else : ?>
              <i data-feather="home"></i>
            <?php endif; ?>
            <h2 class="title"><?= get_the_title() ?></h2>
            <p class="text"><?= get_field('texto',) ?></p>
          </div>
          <div class="right">
            <?php if (get_field('banner')) : ?>
              <img src="<?= get_field('banner')['url'] ?>" alt="<?= get_the_title() ?> | Grupo Sartori" title="<?= get_the_title() ?> | Grupo Sartori">
            <?php else : ?>
              <img src="<?= get_template_directory_uri() ?>/assets/dist/images/industria-image.png" alt="<?= get_the_title() ?> | Grupo Sartori" title="<?= get_the_title() ?> | Grupo Sartori">
            <?php endif; ?>
          </div>
        </section>
      <?php endwhile; ?>
    <?php endif; ?>
  </section>
  <div class="effect-content">
    <span class="effect"></span>
  </div>
  <div class="itens-pequenos-container">
    <section class="itens-pequenos-slider">
      <?php if ($item_query->have_posts()) : ?>
        <?php while ($item_query->have_posts()) : $item_query->the_post(); ?>
          <section class="item-pequeno" data-background-color="<?= get_field('cor_fundo') ?>" data-color="<?= get_field('cor_texto') ?>">
            <?php if (get_field('icone')) : ?>
              <img src="<?= get_field('icone') ?>" alt="<?= get_the_title() ?> | Grupo Sartori" title="<?= get_the_title() ?> | Grupo Sartori">
            <?php else : ?>
              <i data-feather="home"></i>
            <?php endif; ?>
            <div class="title"><?= get_the_title() ?></div>
          </section>
        <?php endwhile; ?>
      <?php endif; ?>
    </section>

    <section class="arrows">
      <span class="arrow itens-prev-arrow">
        <i data-feather="chevron-left">
        </i>
      </span>

      <span class="arrow itens-next-arrow">
        <i data-feather="chevron-right">
        </i>
      </span>
    </section>
  </div>

  <?php wp_reset_query(); ?>

  <?php $numeros_query = new WP_Query(array(
    'post_type' => 'numeros',
    'posts_per_page' => 4,
  )); ?>
  <section class="numeros">
    <section class="numeros-content">
      <?php
      if ($numeros_query->have_posts()) :
        while ($numeros_query->have_posts()) : $numeros_query->the_post(); ?>
          <div class="item">
            <h2 class="title"><?= get_field('numero') ?></h2>
            <div class="text"><?= get_field('descricao') ?></div>
          </div>
      <?php endwhile;
      endif; ?>
    </section>
  </section>


  <?php wp_reset_query(); ?>

  <section class="precisa">
    <div class="left">
      <div class="map">
        <img src="<?= get_template_directory_uri() ?>/assets/dist/images/map.png" alt="Grupo Sartori" title="Capilaridade nacional, estamos presentes onde você precisa | Grupo Sartori">
      </div>
      <h3 class="subtitle">Onde <br> chegamos:</h3>
      <ul class="list">
        <li class="item">São Paulo</li>
        <li class="item">Mato Grosso</li>
        <li class="item">Minas Gerais</li>
        <li class="item">Bahia</li>
        <li class="item">Goiás</li>
        <li class="item">Paraná</li>
        <li class="item">Rio Grande do Sul</li>
        <li class="item">Santa Catarina</li>
        <li class="item">Pernambuco</li>
        <li class="item">Pará</li>
        <li class="item">Piauí</li>
        <li class="item">Espirito Santo</li>
        <li class="item">Mato Grosso do Sul</li>
        <li class="item">Rio de Janeiro</li>
        <li class="item">Sergipe</li>
        <li class="item">Amapá</li>
      </ul>
    </div>

    <div class="right">
      <h2 class="title">
        <small class="small"><?= get_field('mapa_subtitulo') ?></small>
        <?= get_field('mapa_titulo') ?>
      </h2>

      <a href="<?= get_field('mapa_link_botao') ?>" class="button"><?= get_field('mapa_texto_botao') ?></a>
    </div>
  </section>

  <?php wp_reset_query(); ?>
  <section class="servicos">
    <div class="servicos-content">
      <h2 class="title"><?= get_field('nossos_servicos_titulo') ?></h2>
      <h3 class="subtitle"><?= get_field('nossos_servicos_subtitulo') ?></h3>

      <?php $servicos_query = new WP_Query(array(
        'post_type' => 'servicos',
        'posts_per_page' => -1
      )); ?>

      <ul class="list">
        <?php if ($servicos_query->have_posts()) : while ($servicos_query->have_posts()) : $servicos_query->the_post() ?>
            <li class="item"><?= get_the_title() ?></li>
        <?php endwhile;
        endif; ?>
      </ul>
      <?php wp_reset_query(); ?>
      <a href="<?= get_field('nossos_servicos_link_botao') ?>" class="button"><?= get_field('nossos_servicos_texto_botao') ?></a>
    </div>
  </section>

  <section class="midia">
    <h2 class="section-title">Saiu na mídia</h2>
    <div class="list">
      <?php
      $midia_query = new WP_Query(array(
        'post_type' => 'saiu-na-midia',
        'posts_per_page' => 6,
      ));
      if ($midia_query->have_posts()) : while ($midia_query->have_posts()) : $midia_query->the_post();
      ?>
          <a href="<?= get_field('link') ?>" target="_blank" class="article">
            <article>
              <h3 class="subtitle"><span class="date"><?= get_field('data') ?> - </span><?= get_the_title() ?></h3>
            </article>
          </a>
      <?php endwhile;
      endif; ?>
    </div>

    <a href="<?= home_url() ?>/saiu-na-midia" class="button">
      Veja outras noticias
      <span class="icon">
        <i data-feather="chevron-right" clas="icon"></i>
      </span>
    </a>
  </section>

  <section class="blog">
    <div class="blog-content">
      <h2 class="section-title">últimas do blog</h2>

      <div class="list">
        <?php
        $query = new WP_Query(
          array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'order_by' => 'date',
            'order' => 'DESC',
            'post_status' => 'publish',
          )
        );
        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
        ?>
            <article class="article">
              <div class="article-content">
                <span class="date"><?= get_the_date() ?></span>
                <h3 class="subtitle"><?= get_the_title() ?></h3>
                <p class="text"><?= excerpt(20) ?></p>
              </div>
              <a href="<?= get_the_permalink() ?>" class="link"><i data-feather="plus"></i></a>
            </article>
        <?php
          endwhile;
        endif;
        ?>
      </div>
    </div>
  </section>

  <?php get_template_part('includes/cta-curriculo'); ?>
</main>

<?php get_footer(); ?>