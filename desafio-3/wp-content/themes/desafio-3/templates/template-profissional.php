<?php
// Template Name: Para profissionais
?>

<?php get_header(); ?>
<?php get_template_part('includes/whatsapp') ?>

<main class="profissional-page">
  <?php get_template_part('includes/white-jumbotron') ?>

  <section class="before-banner">
    <div class="before-banner-content">
      <h2 class="subtitle">Programa de Carreira e Performance</h2>

      <p class="text">
        Não sabe como procurar um novo emprego ou desenhar seu currículo?
        Você acabou de encontrar o programa certo pra você. Nosso objetivo é alinhar as suas
        expectativas as necessidades do mercado e te preparar para que você conquiste a sua
        recolocação.
      </p>

      <p class="text">
        O melhor de tudo é que nós, ainda enviamos o seu material a nossa base de clientes,
        para contratações, sem custo adicional para a empresa... que incentivo a contratação,
        hein?
      </p>
    </div>
  </section>


  <figure class="banner-full">
    <img src="<?= get_template_directory_uri() ?>/assets/resources/images/banner-profissional.png" alt="Para profissionais | Grupo Sartori" title="Para profissionais | Grupo Sartori">
  </figure>

  <section class="post-banner">
    <div class="post-banner-content">
      <h2 class="subtitle">O programa é estruturado em 6 etapas, sendo:</h2>

      <ol class="list">
        <li class="item">Autoconhecimento </li>
        <li class="item">Mapeamento de mercado e revisão curricular</li>
        <li class="item">Revisão e adequação de Linkedin</li>
        <li class="item">Simulação de entrevistas com feedback</li>
        <li class="item">Aplicação de avaliações psicológicas com feedback</li>
        <li class="item">Preparação do material e envio ao mercado.</li>
      </ol>
      <a href="#" class="floating-button">Consulte-nos <span class="icon"><i data-feather="arrow-right"></i></span></a>
    </div>
  </section>

  <section class="tabs">
    <div class="esquerda">
      <h2 class="subtitle active">Programa de Desenvolvimento de Liderança</h2>
      <h2 class="subtitle">Programa de reposicionamento de carreira</h2>
    </div>

    <div class="direita content-slider">
      <div class="content">
        <p class="text">
          O programa pra quem gosta de exclusividade. Nosso programa é desenhado em forma de mentoria e individualizado, para atingir exatamente aqui que você busca de forma clara, rápida e pra gerar resultados rápidos aplicáveis no seu dia a dia.
        </p>
        <p class="text">
          Simples assim... <strong class="strong">Chama a gente aqui e saiba o que podemos fazer por você, pelo seu desenvolvimento.</strong>
        </p>
      </div>
      <div class="content">
        <p class="text">
          2 O programa pra quem gosta de exclusividade. Nosso programa é desenhado em forma de mentoria e individualizado, para atingir exatamente aqui que você busca de forma clara, rápida e pra gerar resultados rápidos aplicáveis no seu dia a dia.
        </p>
        <p class="text">
          2Simples assim... <strong class="strong">Chama a gente aqui e saiba o que podemos fazer por você, pelo seu desenvolvimento.</strong>
        </p>
      </div>
    </div>
  </section>

  <?php get_template_part('includes/cta-teste') ?>
</main>

<?php get_footer(); ?>