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
        <button type="submit" class="button">OK</button>
      </div>
      <select name="categoria" id="categoria" class="select input">
        <?php foreach (get_categories() as $category) :  ?>
          <option value=""><?= $category->name ?></option>
        <?php endforeach; ?>
      </select>
    </form>
  </header>

  <div class="content">
    <section class="post-list">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post(); ?>
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
      <?php endwhile;
      endif; ?>
    </section>
  </div>

</main>
<?php get_footer(); ?>