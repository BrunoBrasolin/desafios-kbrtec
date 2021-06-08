<?php
// Template name: Orçamento
?>

<?php get_header(); ?>
<?php get_template_part('includes/whatsapp') ?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<main class="orcamento-page">
  <header class="header">
    <img src="<?= get_template_directory_uri() ?>/assets/dist/images/banner-orcamento.png" alt="Orçamento | Grupo Sartori" title="Orçamento | Grupo Sartori">

    <h1 class="title">Orçamento</h1>

    <div class="social-container">
      <a href="#" target="_blank" class="link facebook">
        <img src="<?= get_template_directory_uri() ?>/assets/dist/images/facebook-icone.png" alt="Grupo Sartori" title="Grupo Sartori">
      </a>
      <a href="#" target="_blank" class="link instagram">
        <img src="<?= get_template_directory_uri() ?>/assets/dist/images/instagram-icone.png" alt="Grupo Sartori" title="Grupo Sartori">
      </a>
    </div>
  </header>

  <?php
  $servicos_query = new WP_Query(array(
    'post_type' => 'servicos',
    'posts_per_page' => -1,
  ));
  ?>

  <section class="content">
    <div class="inner-content">
      <h2 class="subtitle">Solicite um orçamento</h2>
      <p class="text">
        Por favor preencha este formulário. <br>
        Em até um dia útil responderemos ao seu orçamento.
      </p>

      <form class="form">
        <div class="linha">
          <div class="form-group active">
            <label for="nome" class="label">Nome:</label>
            <input type="text" id="nome" class="input">
          </div>

          <div class="form-group">
            <label for="servicos" class="label">Escolha o tipo de serviços:</label>
            <select type="text" id="servicos" class="input select">
              <option value="">Selecione um serviço</option>
              <?php if ($servicos_query->have_posts()) : while ($servicos_query->have_posts()) : $servicos_query->the_post(); ?>
                  <option value="<?= get_the_title() ?>"><?= get_the_title() ?></option>
              <?php endwhile;
              endif; ?>
            </select>
          </div>
        </div>

        <div class="linha">
          <div class="form-group">
            <label for="email" class="label">E-mail:</label>
            <input type="email" id="email" class="input">
          </div>
          <div class="form-group pequeno">
            <label for="telefone" class="label">Telefone:</label>
            <input type="text" id="telefone" class="input">
          </div>
          <div class="form-group pequeno">
            <label for="celular" class="label">Celular:</label>
            <input type="text" id="celular" class="input">
          </div>
        </div>

        <div class="form-group">
          <label for="mensagem" class="label">Mensagem:</label>
          <textarea id="mensagem" rows="5" class="input"></textarea>
        </div>

        <div class="form-group lgpd-input">
          <input type="checkbox" id="lgpd">
          <label for="lgpd" class="label">
            <strong class="strong">Estou de acordo</strong> com o Termo de Uso de Dados LGPD - <strong class="strong">Lei nº 13.709</strong>
          </label>
        </div>

        <div class="anti-robot">
          <span class="helper">Prove que você não é um robô</span>
          <div class="g-recaptcha" data-sitekey="your_site_key"></div>
        </div>

        <button type="submit" class="floating-button">
          Enviar
          <span class="icon">
            <i data-feather="arrow-right"></i>
          </span>
        </button>
      </form>
    </div>
  </section>
</main>

<?php get_footer(); ?>