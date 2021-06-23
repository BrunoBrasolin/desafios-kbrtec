<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head() ?>
</head>

<body>

  <header class="limits header">
    <div class="limits-content">
      <a href="<?= home_url() ?>" class="link logo">
        <img class="asset asset-logo" src="<?= get_template_directory_uri() ?>/assets/dist/images/icons/logo.svg" alt="ekiN" title="ekiN">
      </a>

      <a href="<?= home_url('carrinho') ?>" class="link cart">
        <img class="asset asset-cart" src="<?= get_template_directory_uri() ?>/assets/dist/images/icons/cart.svg" alt="Cart | ekiN" title="Cart | ekiN">
        <span class="total-itens">
          <?= WC()->cart->get_cart_contents_count() ?>
        </span>
      </a>
    </div>
  </header>