<?php
// Template Name: Para a sua empresa
?>

<?php get_header(); ?>
<?php get_template_part('includes/whatsapp') ?>

<main class="empresa-page">
  <header class="jumbotron">
    <img src="<?= get_template_directory_uri() ?>/assets/dist/images/grupo-sartori-icone.svg" alt="Grupo Sartori" title="Grupo Sartori">
    <h1 class="title">Para a sua empresa</h1>
  </header>

  <section class="recrutamento">
    <div class="recrutamento-content">
      <h2 class="subtitle">Recrutamento & Seleção </h2>

      <p class="text">Conduzimos todo processo de recrutamento e seleção com de profissionais interno ou externo para as quaisquer áreas da sua empresa. </p>
      <p class="text">Nosso banco de dados amplo e diversificado facilitam a busca pelo profissional desejado, aliado a todo network dos diretores e de seu time de profissionais de alto nível.  100% do processo é desenhado de forma personalizada, para que atenda a sua necessidade e com muita tecnologia, através de vídeo entrevistas e funil estruturado de candidatos, sem qualquer custo adicional, para você ver o candidato, antes que ele esteja a sua frente, assim, garantimos a assertividade na contratação, alinhada a cultura e valores da sua empresa.</p>
    </div>
  </section>

  <figure class="banner-full">
    <img src="<?= get_template_directory_uri() ?>/assets/resources/images/banner-empresa.png" alt="Para a sua empresa | Grupo Sartori" title="Para a sua empresa | Grupo Sartori">
  </figure>

  <section class="numeros">
    <div class="numeros-content">
      <div class="item"></div>
      <div class="item"></div>
      <div class="item"></div>
      <div class="item"></div>
    </div>
  </section>

</main>

<?php get_footer(); ?>