<?php get_header() ?>

<?php $product = wc_get_product(get_the_ID()); ?>

<main class="single-page">
  <section class="row">
    <div class="left">
      <figure class="product-image">
        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= get_the_title() ?> | ekiN" title="<?= get_the_title() ?> | ekiN">
      </figure>

      <div class="gallery-slider">

        <?php
        $imagesId = $product->get_gallery_image_ids();
        foreach ($imagesId as $imageId) :
          $imageUrl = wp_get_attachment_url($imageId);
        ?>

        <img src="<?= $imageUrl ?>" alt="<?= get_the_title() ?> | ekiN">


        <?php endforeach; ?>
      </div>
    </div>

    <div class="right">
      <div class="categorias-row">
        <?php
        $categories = get_the_terms(get_the_ID(), "product_cat");
        foreach ($categories as $categoryId => $category) :
        ?>
          <a href="<?= home_url('loja') ?>?categoria=<?= $category->term_id ?>" class="categoria <?= $category->term_id == $_GET["categoria"] ? 'active' : '' ?>"><?= $category->name ?></a>
        <?php endforeach; ?>
      </div>

      <h2 class="title"><?= get_the_title() ?></h2>

      <div class="price-row">
        <?php if ($product->sale_price > 0) : ?>
          <span class="sale-price">R$ <?= $product->sale_price ?></span>
        <?php endif ?>
        <span class="regular-price">R$ <?= $product->regular_price ?></span>
      </div>

      <a href="#" class="loading-button add-to-cart" data-product-id="<?= get_the_ID() ?>">
        Comprar
        <span class="loading"></span>
      </a>

      <div class="short-content">
        <?= $product->short_description ?>
      </div>
    </div>
  </section>

  <?php if ($product->description) : ?>
    <section class="details">
      <h3 class="details-title">Descrição do produto</h3>

      <div class="details-content">
        <?= wpautop($product->description) ?>
      </div>
    </section>
  <?php endif ?>

  <?php get_template_part('includes/add-to-cart-modal') ?>
</main>

<?php get_footer() ?>