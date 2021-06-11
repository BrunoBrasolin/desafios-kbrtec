<?php
// Template name: Contato
?>

<?php get_header(); ?>
<?php get_template_part('includes/whatsapp') ?>

<main class="contato-page">
  <header class="image-jumbotron">
    <img class="background-image" src="<?= get_template_directory_uri() ?>/assets/dist/images/banner-contato.png" alt="Contato | Grupo Sartori" title="Contato | Grupo Sartori">

    <div class="header-content">
      <h1 class="title">Contatos</h1>

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
      <div class="esquerda">
        <h2 class="subtitle">Entre em contato conosco para qualquer informação ou dúvida.</h2>
        <?= do_shortcode('[contact-form-7 id="383" title="Contatos"]') ?>
      </div>

      <div class="direita">
        <div class="top">
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
          <a href="mailto:contato@sartoridho.com.br" class="email">contato@sartoridho.com.br</a>
        </div>

        <div class="bottom">
          <h3 class="subtitle">Onde estamos</h3>
          <span class="endereco">
            Av. Senador Feijó, 686
            <br>
            Vila Mathias, Santos - SP,
            <br>
            CEP/ 11015-504
          </span>
        </div>
      </div>
    </div>

    <section class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5156.51558368668!2d-46.32952855131257!3d-23.95311443752981!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce030f0dfb241f%3A0x2f319f0f2c4dc0af!2sGrupo%20Sartori%20DHO!5e0!3m2!1sen!2sbr!4v1623438406791!5m2!1sen!2sbr" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
  </section>
</main>

<?php get_footer(); ?>