<?php get_header() ?>

<section class="banner-loja">
  <img src="<?= get_template_directory_uri() ?>/assets/dist/images/banner-1.png" alt="ekiN" title="ekiN">
  <img src="<?= get_template_directory_uri() ?>/assets/dist/images/banner-2.png" alt="ekiN" title="ekiN">
  <img src="<?= get_template_directory_uri() ?>/assets/dist/images/banner-3.png" alt="ekiN" title="ekiN">
</section>

<main class="loja-page container">

  <?php
  $args = array(
    'post_type' => 'product',
    'post_status' => 'publish',

  );
  if ($_GET['categoria']) {
    $args["tax_query"] = array(array(
      'taxonomy'  => 'product_cat',
      'field'     => 'id',
      'terms'     => $_GET['categoria']
    ));
  }

  $products = new WP_Query($args);
  ?>

  <aside class="filters">
    <h2 class="title">Categorias</h2>
    <div class="categorias">
      <a href="<?= get_site_url() ?>/loja" class="categoria <?= !isset($_GET["categoria"]) ? 'active' : '' ?>">Todos os produtos (<?= $products->post_count ?>)</a>
      <?php
      $categories = get_terms(array('taxonomy'   => "product_cat"));
      foreach ($categories as $categoryId => $category) :
      ?>
        <a href="?categoria=<?= $category->term_id ?>" class="categoria <?= $category->term_id == $_GET["categoria"] ? 'active' : '' ?>"><?= $category->name ?> (<?= $category->count ?>)</a>
      <?php endforeach; ?>
    </div>
  </aside>

  <section class="products">
    <h2 class="title">
      <?php if (!$_GET['categoria']) : ?>
        Todos os produtos (<?= $products->post_count ?>)
      <?php else : ?>
        <?php
        $currentCategory = get_term_by('term_taxonomy_id', $_GET["categoria"], 'product_cat');
        ?>
        <?= $currentCategory->name ?> (<?= $products->post_count ?>)
      <?php endif; ?>
    </h2>

    <div class="products-content">
      <?php
      if ($products->have_posts()) :
        while ($products->have_posts()) :
          $products->the_post();
          global $product; // $product = wc_get_product(get_the_ID());
          $terms = get_the_terms($post->ID, 'product_cat');
      ?>
          <div class="product" data-product-id="<?= get_the_ID() ?>">
            <div class="top">
              <figure class="product-image">
                <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= get_the_title() ?> | ekiN" title="<?= get_the_title() ?> | ekiN">
              </figure>
              <h3 class="produto-title"><?= get_the_title() ?></h3>
              <div class="price-row">
                <?php if ($product->sale_price > 0) : ?>
                  <span class="sale-price">R$ <?= $product->sale_price ?></span>
                <?php endif ?>
                <span class="regular-price">R$ <?= $product->regular_price ?></span>
              </div>
            </div>
            <a href="#" class="button add-to-cart">
              Comprar
              <span class="loading"></span>
            </a>
          </div>
      <?php endwhile;
      endif; ?>
    </div>
  </section>

  <div class="filter-button">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="filter icon" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3" />
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="close icon" viewBox="0 0 352 512">
      <path d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" />
    </svg>
  </div>

</main>

<?php get_footer() ?>