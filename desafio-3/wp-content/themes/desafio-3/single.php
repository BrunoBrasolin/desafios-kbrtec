<?php get_header(); ?>

<?php get_template_part('includes/whatsapp') ?>


<main class="single-page">
  <?php get_template_part('includes/breadcrumb') ?>

  <section class="top">
    <span class="date"><?= get_the_date(); ?></span>
    <h1 class="title"><?= get_the_title(); ?></h1>
  </section>

  <figure class="banner-full">
    <?php if (has_post_thumbnail()) :  ?>
      <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= get_the_title() ?> | Grupo Sartori" title="<?= get_the_title() ?> | Grupo Sartori">
    <?php endif; ?>
  </figure>

  <section class="content">
    <?= get_the_content(); ?>
  </section>

  <section class="compartilhe">
    <span class="texto">Compartilhe</span>
    <a class="link link-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?= get_the_permalink() ?>&amp;src=sdkpreparse" target="_blank" title="Compartilhe no Facebook | Grupo Sartori">
      <img src="<?= get_template_directory_uri() ?>/assets/dist/images/facebook.svg" alt="Compartilhe no Facebook | Grupo Sartori" title="Compartilhe no Facebook | Grupo Sartori">
    </a>
    <a class="link link-whatsapp" href="https://api.whatsapp.com/send?text=<?= get_the_permalink() ?>" target="_blank" title="Compartilhe no WhatsApp | Grupo Sartori">
      <img src="<?= get_template_directory_uri() ?>/assets/dist/images/whatsapp.svg" alt="Compartilhe no WhatsApp | Grupo Sartori" title="Compartilhe no WhatsApp | Grupo Sartori">
    </a>
    <a class="link link-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?= get_the_permalink() ?>&amp;src=sdkpreparse" target="_blank" title="Compartilhe no LinkedIn | Grupo Sartori">
      <img src="<?= get_template_directory_uri() ?>/assets/dist/images/linkedin.svg" alt="Compartilhe no LinkedIn | Grupo Sartori" title="Compartilhe no LinkedIn | Grupo Sartori">
    </a>
  </section>

  <section class="relacionadas">
    <div class="relacionadas-content">
      <h2 class="title">Notícias relacionadas</h2>

      <section class="list">

        <?php
        $query = new WP_Query(array(
          'posts_per_page' => 3,
          'order' => 'DESC',
          'orderBy' => 'date'
        ));

        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
        ?>
            <article class="article">

              <?php if (has_post_thumbnail()) :  ?>
                <div class="image with-image">
                  <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?> | Grupo Sartori" title="<?= get_the_title() ?> | Grupo Sartori">
                <?php else : ?>
                  <div class="image no-image">
                    <img src="<?= get_template_directory_uri() ?>/assets/dist/images/grupo-sartori-logo.svg" alt="<?= get_the_title() ?> | Grupo Sartori" title="<?= get_the_title() ?> | Grupo Sartori">
                  <?php endif; ?>
                  </div>
                  <span class="date"><?= get_the_date() ?></span>
                  <h3 class="subtitle"><?= get_the_title() ?></h3>
                  <a href="<?= get_the_permalink() ?>" class="button">
                    Leia mais
                    <span class="icon">
                      <i data-feather="arrow-right"></i>
                    </span>
                  </a>
            </article>

        <?php endwhile;
        endif; ?>
      </section>
    </div>
  </section>

  <?php get_template_part('includes/cta-curriculo'); ?>
</main>

<?php get_footer(); ?>