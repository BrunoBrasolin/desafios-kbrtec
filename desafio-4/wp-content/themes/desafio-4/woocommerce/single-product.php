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
$zones = WC_Shipping_Zones::get_zones();
// foreach ($zones as $zone) {
//   foreach ($zone['shipping_methods'] as $z) {
//     // print_r($z->method_title);
//     echo "<pre>";
//     print_r($z->method_title);
//     echo "</pre>";
//   }
//   return $zone['shipping_methods'];
// };
// die;
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

      <?php if ($product->get_stock_status()) : ?>
        <span class="stock true">Em estoque</span>
      <?php else : ?>
        <span class="stock false">Fora de estoque</span>
      <?php endif; ?>

      <div class="price-row">
        <?php if ($product->get_sale_price() > 0) : ?>
          <span class="sale-price">R$ <?= $product->get_regular_price() > 0 ? $product->get_regular_price() : $product->get_price() ?></span>
          <span class="regular-price">R$ <?= $product->get_sale_price() ?></span>
        <?php else : ?>
          <span class="regular-price">R$ <?= $product->get_regular_price() > 0 ? $product->get_regular_price() : $product->get_price() ?></span>
        <?php endif; ?>
      </div>

      <div class="quantity-row">
        <label for="product_quantity">Quantidade</label>
        <input id="product_quantity" type="number" value="1" onKeyPress="if(this.value.length==2) return false;" />
      </div>


      <?php if ($attributes) : ?>
        <?php foreach ($attributes as $attribute) : ?>
          <h3 class="subtitle"><?= $attribute["name"] ?></h3>
          <ul class="attributes-list">
            <?php foreach ($attribute["options"] as $id => $option) : ?>
              <li class="item <?= $product->get_default_attributes()[strtolower($attribute["name"])] == $option ? 'active' : '' ?>" data-attribute-position="<?= $attribute["position"] ?>" data-attribute-id="<?= $id ?>"><?= $option ?></li>
            <?php endforeach; ?>
          </ul>
          <hr>
        <?php endforeach; ?>
      <?php endif; ?>

      <a href="#" class="loading-button add-to-cart" data-product-has-variation="<?= $product->is_type('variable') ?>" data-product-id="<?= get_the_ID() ?>">
        Comprar
        <span class="loading"></span>
      </a>


      <div class="shipping-form" id='shipping-calc'>

        <p><?= get_option('wscip_title', __('Consulte o prazo estimado e valor da entrega', 'wsc-plugin')); ?></p>

        <div class="shipping-row">
          <input type='tel' id='wscp-postcode' autocomplete="off" placeholder="<?= get_option('wscip_placeholder', __('Insira o seu CEP', 'wsc-plugin')) ?>" name='wscp-postcode' class='input-zip' />
          <input type='button' class="shipping-button" id='wscp-button' class="" value='<?= __('Calcular', 'wsc-plugin'); ?>'>
        </div>

        <a href="http://www.buscacep.correios.com.br/sistemas/buscacep/" class="shipping-help" target="_blank"><?php _e('Não sei meu CEP', 'wsc-plugin'); ?></a>

        <input type='hidden' name='wscp-nonce' id='wscp-nonce' value='<?= wp_create_nonce('wscp-nonce'); ?>'>
        <input type="hidden" name="add-to-cart" value="<?= get_the_ID() ?>">

        <div id='wscp-response'></div>

      </div>



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