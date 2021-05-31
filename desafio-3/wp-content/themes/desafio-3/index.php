<?php get_header(); ?>
<main class="blog-page">

  <header class="top">
    <h1 class="title">últimas do blog</h1>

    <form class="form">
      <span class="icon">
        <i data-feather="filter"></i>
      </span>
      <label for="procura" class="label">O que você procura</label>
      <div class="input-group">
        <input type="text" class="input" name="s" id="procura">
        <button type="submit" class="button right-item">OK</button>
      </div>
      <input type="hidden" class="categoria-input" name="cat">
      <div class="custom-select">
        <div class="label">
          <span class="text">
            Todas as categorias
          </span>
          <span class="right-item">
            <i data-feather="chevron-down"></i>
          </span>
        </div>
        <ul class="dropdown">
          <li data-id="">Todas as categorias</li>
          <?php foreach (get_categories() as $category) : ?>
            <li data-id="<?= $category->term_id ?>"><?= $category->name ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </form>
  </header>

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

  <?php if (paginate_links()) : ?>

    <section class="paginacao">
      <?php if (!isset($_GET["pagina"]) || $_GET["pagina"] < 2) : ?>
        <div class="link prev disabled">
          <i data-feather="triangle"></i>
          <span class="texto">Anterior</span>
        </div>
        <div class="numbers">
        <?php endif; ?>

        <?= paginate_links(array(
          'format' => '?pagina=%#%',
          'current' => $_GET["pagina"] ?? 1,
          'prev_text' => '<div class="link prev"><i data-feather="triangle"></i> <span class="texto">Anterior</span></div><div class="numbers">',
          'next_text' => '</div><div class="link next"><span class="texto">Próximo</span> <i data-feather="triangle"></i></div>'
        )); ?>

        <?php if (ceil(wp_count_posts()->publish / 10) == $_GET["pagina"]) : ?>
        </div>
        <div class="link next disabled">
          <span class="texto">Próximo</span>
          <i data-feather="triangle"></i>
        </div>
      <?php endif; ?>
    </section>
  <?php endif; ?>
</main>
<?php get_footer(); ?>