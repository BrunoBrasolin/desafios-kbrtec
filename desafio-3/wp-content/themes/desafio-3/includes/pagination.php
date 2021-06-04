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

      <?php
      $post_type = is_blog() ? 'post' : 'midia';
      $per_page = is_blog() ? 10 : 5;
      if (ceil(wp_count_posts($post_type)->publish / $per_page) == $_GET["pagina"]) :
      ?>
      </div>
      <div class="link next disabled">
        <span class="texto">Próximo</span>
        <i data-feather="triangle"></i>
      </div>
    <?php endif; ?>
  </section>
<?php endif; ?>