<?php get_header() ?>

<?php $product = wc_get_product(get_the_ID()); ?>
<?php
if ($product->is_type('variable')) {
  $product = new WC_Product_Variable(get_the_ID());
  $variations = $product->get_available_variations();
  $attributes = $product->get_data()["attributes"];
} else {
  $product = new WC_Product_Simple(get_the_ID());
}
?>

<main class="single-page">
  <section class="row">
    <div class="left">
      <?php $imagesId = $product->get_gallery_image_ids(); ?>
      <div class="main-image-slider">
        <figure class="product-image">
          <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= get_the_title() ?> | ekiN" title="<?= get_the_title() ?> | ekiN">
        </figure>

        <?php foreach ($imagesId as $imageId) : $imageUrl = wp_get_attachment_url($imageId); ?>
          <figure class="product-image">
            <img src="<?= $imageUrl ?>" alt="<?= get_the_title() ?> | ekiN">
          </figure>
        <?php endforeach; ?>
      </div>
      <div class="main-image-arrows">
        <span class="main-image-arrow" id="prevArrow">
          <img src="<?= get_template_directory_uri() ?>/assets/dist/images/icons/chevron-right.svg" alt="<?= get_the_title() ?> | ekiN" title="<?= get_the_title() ?> | ekiN">
        </span>
        <span class="main-image-arrow" id="nextArrow">
          <img src="<?= get_template_directory_uri() ?>/assets/dist/images/icons/chevron-right.svg" alt="<?= get_the_title() ?> | ekiN" title="<?= get_the_title() ?> | ekiN">
        </span>
      </div>

      <div class="gallery-slider">
        <figure class="gallery-image">
          <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= get_the_title() ?> | ekiN" title="<?= get_the_title() ?> | ekiN">
        </figure>

        <?php foreach ($imagesId as $imageId) : $imageUrl = wp_get_attachment_url($imageId); ?>
          <figure class="gallery-image">
            <img src="<?= $imageUrl ?>" alt="<?= get_the_title() ?> | ekiN">
          </figure>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="right">
      <div class="categorias-row">
        <?php
        $categories = get_the_terms(get_the_ID(), "product_cat");
        if (count($categories) > 0) :
          foreach ($categories as $categoryId => $category) :
        ?>
            <a href="<?= home_url('loja') ?>?categoria=<?= $category->term_id ?>" class="categoria <?= $category->term_id == $_GET["categoria"] ? 'active' : '' ?>"><?= $category->name ?></a>
        <?php endforeach;
        endif; ?>
      </div>

      <h2 class="title"><?= get_the_title() ?></h2>

      <div class="price-row">
        <?php if ($product->sale_price > 0) : ?>
          <span class="sale-price">R$ <?= $product->get_sale_price() ?></span>
        <?php endif; ?>
        <span class="regular-price">R$ <?= $product->get_price() ?></span>
      </div>

      <?php if ($attributes) : ?>
        <?php foreach ($attributes as $attribute) : ?>
          <h3 class="subtitle"><?= $attribute["name"] ?></h3>
          <ul class="attributes-list">
            <?php foreach ($attribute["options"] as $option) : ?>
              <li class="item <?= $product->get_default_attributes()[strtolower($attribute["name"])] == $option ? 'active' : '' ?>" data-attribute-position="<?= $attribute["position"] ?>"><?= $option ?></li>
            <?php endforeach; ?>
          </ul>
          <hr>
        <?php endforeach; ?>
      <?php endif; ?>

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