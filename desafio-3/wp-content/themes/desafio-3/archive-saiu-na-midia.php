<?php get_header() ?>

<?php get_template_part('includes/whatsapp') ?>


<main class="midia-page">
  <?php get_template_part('includes/breadcrumb') ?>

  <?php get_template_part('includes/top-filter') ?>

  <section class="content">
    <div class="midia-list">
      <?php

      $args = array(
        'post_type' => 'saiu-na-midia',
        'posts_per_page' => 5,
        'paged' => $_GET["pagina"] ?? 1,
      );

      $de_valido = preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $_GET['de'] ?? null);
      $ate_valido = preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $_GET['ate'] ?? null);

      if ($de_valido || $ate_valido) {
        $args['meta_query'] = array('relation' => 'and');
        if ($de_valido)
          array_push(
            $args['meta_query'],
            array(
              'key' => 'data',
              'value' => $_GET["de"] ?? null,
              'compare' => '>=',
              'type' => 'DATE',
            )
          );
        if ($ate_valido)
          array_push(
            $args['meta_query'],
            array(
              'key' => 'data',
              'value' => $_GET["ate"] ?? null,
              'compare' => '<=',
              'type' => 'DATE',
            ),
          );
      }

      $midia_query = query_posts($args);
      if (have_posts()) : while (have_posts()) : the_post();
      ?>
          <article class="midia">
            <span class="date"><?= get_field('data') ?></span>
            <div class="linha">
              <h2 class="title"><?= get_the_title() ?></h2>
              <a href="<?= get_field('link') ?>" class="link">
                Ver na mídia
                <span class="icon">
                  <i data-feather="arrow-right"></i>
                </span>
              </a>
            </div>
            <h3 class="fonte">
              <img src="<?= get_template_directory_uri() ?>/assets/dist/images/fonte-icone.png" alt="Grupo Sartori" title="Grupo Sartori">
              Fonte: <?= get_field('fonte') ?>
            </h3>
          </article>
      <?php endwhile;
      endif; ?>
    </div>
  </section>

  <?php get_template_part('includes/pagination') ?>

  <?php get_template_part('includes/cta-curriculo'); ?>
</main>

<?php get_footer() ?>