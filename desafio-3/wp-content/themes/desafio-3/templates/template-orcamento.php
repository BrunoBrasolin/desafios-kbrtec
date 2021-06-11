<?php
// Template name: Orçamento
?>

<?php get_header(); ?>
<?php get_template_part('includes/whatsapp') ?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<main class="orcamento-page">
  <header class="image-jumbotron">
    <img class="background-image" src="<?= get_template_directory_uri() ?>/assets/dist/images/banner-orcamento.png" alt="Orçamento | Grupo Sartori" title="Orçamento | Grupo Sartori">

    <div class="header-content">
      <h1 class="title">Orçamento</h1>

      <div class="social-container">
        <a href="#" target="_blank" class="link facebook">
          <img src="<?= get_template_directory_uri() ?>/assets/dist/images/facebook-icone.png" alt="Grupo Sartori" title="Grupo Sartori">
        </a>
        <a href="#" target="_blank" class="link instagram">
          <img src="<?= get_template_directory_uri() ?>/assets/dist/images/instagram-icone.png" alt="Grupo Sartori" title="Grupo Sartori">
        </a>
      </div>
    </div>
  </header>

  <section class="content">
    <div class="inner-content">
      <h2 class="subtitle">Solicite um orçamento</h2>
      <p class="text">
        Por favor preencha este formulário. <br>
        Em até um dia útil responderemos ao seu orçamento.
      </p>

      <?= do_shortcode('[contact-form-7 id="369" title="Orçamento"]') ?>
    </div>
  </section>

  <section class="numeros-content">
    <h3 class="subtitle">Se preferir solicite um orçamento por:</h3>

    <div class="linha">

      <a href="tel:5513991590164" class="contato-link">
        <img src="<?= get_template_directory_uri() ?>/assets/dist/images/footer-tel.svg" alt="Contato | Grupo Sartori" title="Contato | Grupo Sartori">
        <div class="right">
          <span class="type">Comercial:</span>
          <span class="number">(13) <b class="bold">99159-0164</b></span>
        </div>
      </a>
      <a href="tel:5513991037559" class="contato-link">
        <img src="<?= get_template_directory_uri() ?>/assets/dist/images/footer-tel.svg" alt="Contato | Grupo Sartori" title="Contato | Grupo Sartori">
        <div class="right">
          <span class="type">Suporte ao candidato:</span>
          <span class="number">(13) <b class="bold">99103-7559</b></span>
        </div>
      </a>
      <a href="tel:5513991037559" class="contato-link">
        <img src="<?= get_template_directory_uri() ?>/assets/dist/images/footer-tel.svg" alt="Contato | Grupo Sartori" title="Contato | Grupo Sartori">
        <div class="right">
          <span class="type">Sucesso do cliente:</span>
          <span class="number">(13) <b class="bold">99103-7559</b></span>
        </div>
      </a>
    </div>
  </section>

  <?php get_template_part('includes/cta-curriculo'); ?>
</main>

<?php get_footer(); ?>