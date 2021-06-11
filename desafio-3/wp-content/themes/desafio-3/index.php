<?php get_header(); ?>

<?php get_template_part('includes/whatsapp') ?>


<main class="blog-page">
  <?php get_template_part('includes/breadcrumb') ?>

  <?php get_template_part('includes/top-filter') ?>

  <div class="content">
    <section class="post-list">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <article class="article">
            <?php if (has_post_thumbnail()) :  ?>
              <div class="left with-image">
                <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?> | Grupo Sartori" title="<?= get_the_title() ?> | Grupo Sartori">
              <?php else : ?>
                <div class="left no-image">
                  <img src="<?= get_template_directory_uri() ?>/assets/dist/images/grupo-sartori-logo.svg" alt="<?= get_the_title() ?> | Grupo Sartori" title="<?= get_the_title() ?> | Grupo Sartori">
                <?php endif; ?>
                </div>

                <div class="right">
                  <span class="date"><?= get_the_date() ?></span>
                  <h2 class="title">
                    <a href="<?= get_the_permalink() ?>">
                      <?= get_the_title() ?>
                    </a>
                  </h2>
                  <p class="text"><?= excerpt(50) ?></p>
                  <a href="<?= get_the_permalink() ?>" class="button">
                    Leia Mais
                    <span class="icon">
                      <i data-feather="arrow-right"></i>
                    </span>
                  </a>
                </div>
          </article>
        <?php endwhile; ?>

      <?php else : ?>
        <h2 class="title">Nenhum post encontrado</h2>
      <?php endif; ?>
    </section>
  </div>

  <?php get_template_part('includes/pagination') ?>

  <?php get_template_part('includes/cta-curriculo'); ?>
</main>
<?php get_footer(); ?>