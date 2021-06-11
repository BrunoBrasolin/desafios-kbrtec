<?php
// Template Name: Para a sua empresa
?>

<?php get_header(); ?>
<?php get_template_part('includes/whatsapp') ?>

<main class="empresa-page">
  <?php get_template_part('includes/breadcrumb') ?>

  <?php get_template_part('includes/white-jumbotron') ?>

  <section class="before-banner">
    <div class="before-banner-content">
      <h2 class="subtitle">Recrutamento & Seleção </h2>

      <p class="text">Conduzimos todo processo de recrutamento e seleção com de profissionais interno ou externo para as quaisquer áreas da sua empresa. </p>
      <p class="text">Nosso banco de dados amplo e diversificado facilitam a busca pelo profissional desejado, aliado a todo network dos diretores e de seu time de profissionais de alto nível.  100% do processo é desenhado de forma personalizada, para que atenda a sua necessidade e com muita tecnologia, através de vídeo entrevistas e funil estruturado de candidatos, sem qualquer custo adicional, para você ver o candidato, antes que ele esteja a sua frente, assim, garantimos a assertividade na contratação, alinhada a cultura e valores da sua empresa.</p>
    </div>
  </section>

  <figure class="banner-full">
    <img src="<?= get_template_directory_uri() ?>/assets/resources/images/banner-empresa.png" alt="Para a sua empresa | Grupo Sartori" title="Para a sua empresa | Grupo Sartori">
  </figure>

  <?php $numeros_query = new WP_Query(array(
    'post_type' => 'numeros',
    'posts_per_page' => 4,
  )); ?>

  <section class="numeros">
    <section class="numeros-content">
      <?php
      if ($numeros_query->have_posts()) :
        while ($numeros_query->have_posts()) : $numeros_query->the_post(); ?>
          <div class="item">
            <h2 class="title"><?= get_field('numero') ?></h2>
            <div class="text"><?= get_field('descricao') ?></div>
          </div>
      <?php endwhile;
      endif; ?>
    </section>
  </section>

  <section class="tabs">
    <div class="esquerda">
      <h2 class="subtitle active">Assessment</h2>
      <h2 class="subtitle">Avaliações Psicológicas e Psicossociais</h2>
      <h2 class="subtitle">Projetos Especiais Área Operacional</h2>
      <h2 class="subtitle">Executive Search</h2>
    </div>

    <div class="direita content-slider">
      <div class="content">
        <h3 class="subtitle">Como o assessment agrega valor aos seus serviços?</h3>
        <p class="text">
          Ao desenvolver uma melhor compreensão de como melhorar o desempenho e a eficácia de indivíduos, times e empresas e também dos seus estilos de comportamento natural, a empresa ganha uma forte vantagem competitiva sobre seus concorrentes, pois nunca podemos esquecer que são as pessoas que movem os resultados e se suas características forem compreendidas e potencializadas, isso se tornará uma grande fortaleza empresarial.
        </p>
        <p class="text">
          Nosso sistema fornece a compreensão sobre os seus colegas, equipes e organização, sendo uma plataforma completa para desenvolvimento organizacional, seja para agestão de colaboradores, trabalho em equipe e construção de equipe, desenvolvimento de liderança ou de desenvolvimento de RH.
        </p>
        <h3 class="subtitle">Entre as aplicações mais populares estão:</h3>

        <ul class="lista">
          <li class="item">Recrutamento e Seleção</li>
          <li class="item">Desenvolvimento de liderança</li>
          <li class="item">Desenvolvimento organizacional</li>
          <li class="item">Formação Atendimento ao Cliente</li>
          <li class="item">Desenvolvimento de Equipes</li>
          <li class="item">Treinamentos</li>
          <li class="item">Comunicação intercultural</li>
          <li class="item">Comunicação e Habilidades Interpessoais</li>
          <li class="item">Gestão de Talentos</li>
        </ul>
      </div>
      <div class="content">
        <h3 class="subtitle">Avaliações Psicológicas e Psicossociais?</h3>
        <p class="text">
          Ao desenvolver uma melhor compreensão de como melhorar o desempenho e a eficácia de indivíduos, times e empresas e também dos seus estilos de comportamento natural, a empresa ganha uma forte vantagem competitiva sobre seus concorrentes, pois nunca podemos esquecer que são as pessoas que movem os resultados e se suas características forem compreendidas e potencializadas, isso se tornará uma grande fortaleza empresarial.
        </p>
        <p class="text">
          Nosso sistema fornece a compreensão sobre os seus colegas, equipes e organização, sendo uma plataforma completa para desenvolvimento organizacional, seja para agestão de colaboradores, trabalho em equipe e construção de equipe, desenvolvimento de liderança ou de desenvolvimento de RH.
        </p>
        <h3 class="subtitle">Entre as aplicações mais populares estão:</h3>

        <ul class="lista">
          <li class="item">Recrutamento e Seleção</li>
          <li class="item">Desenvolvimento de liderança</li>
          <li class="item">Desenvolvimento organizacional</li>
          <li class="item">Formação Atendimento ao Cliente</li>
          <li class="item">Desenvolvimento de Equipes</li>
          <li class="item">Treinamentos</li>
          <li class="item">Comunicação intercultural</li>
          <li class="item">Comunicação e Habilidades Interpessoais</li>
          <li class="item">Gestão de Talentos</li>
        </ul>
      </div>
      <div class="content">
        <h3 class="subtitle">Projetos Especiais Área Operacional?</h3>
        <p class="text">
          Ao desenvolver uma melhor compreensão de como melhorar o desempenho e a eficácia de indivíduos, times e empresas e também dos seus estilos de comportamento natural, a empresa ganha uma forte vantagem competitiva sobre seus concorrentes, pois nunca podemos esquecer que são as pessoas que movem os resultados e se suas características forem compreendidas e potencializadas, isso se tornará uma grande fortaleza empresarial.
        </p>
        <p class="text">
          Nosso sistema fornece a compreensão sobre os seus colegas, equipes e organização, sendo uma plataforma completa para desenvolvimento organizacional, seja para agestão de colaboradores, trabalho em equipe e construção de equipe, desenvolvimento de liderança ou de desenvolvimento de RH.
        </p>
        <h3 class="subtitle">Entre as aplicações mais populares estão:</h3>

        <ul class="lista">
          <li class="item">Recrutamento e Seleção</li>
          <li class="item">Desenvolvimento de liderança</li>
          <li class="item">Desenvolvimento organizacional</li>
          <li class="item">Formação Atendimento ao Cliente</li>
          <li class="item">Desenvolvimento de Equipes</li>
          <li class="item">Treinamentos</li>
          <li class="item">Comunicação intercultural</li>
          <li class="item">Comunicação e Habilidades Interpessoais</li>
          <li class="item">Gestão de Talentos</li>
        </ul>
      </div>
      <div class="content">
        <h3 class="subtitle">Executive Search?</h3>
        <p class="text">
          Ao desenvolver uma melhor compreensão de como melhorar o desempenho e a eficácia de indivíduos, times e empresas e também dos seus estilos de comportamento natural, a empresa ganha uma forte vantagem competitiva sobre seus concorrentes, pois nunca podemos esquecer que são as pessoas que movem os resultados e se suas características forem compreendidas e potencializadas, isso se tornará uma grande fortaleza empresarial.
        </p>
        <p class="text">
          Nosso sistema fornece a compreensão sobre os seus colegas, equipes e organização, sendo uma plataforma completa para desenvolvimento organizacional, seja para agestão de colaboradores, trabalho em equipe e construção de equipe, desenvolvimento de liderança ou de desenvolvimento de RH.
        </p>
        <h3 class="subtitle">Entre as aplicações mais populares estão:</h3>

        <ul class="lista">
          <li class="item">Recrutamento e Seleção</li>
          <li class="item">Desenvolvimento de liderança</li>
          <li class="item">Desenvolvimento organizacional</li>
          <li class="item">Formação Atendimento ao Cliente</li>
          <li class="item">Desenvolvimento de Equipes</li>
          <li class="item">Treinamentos</li>
          <li class="item">Comunicação intercultural</li>
          <li class="item">Comunicação e Habilidades Interpessoais</li>
          <li class="item">Gestão de Talentos</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="treinamentos">
    <div class="treinamentos-content">
      <h2 class="title">Treinamentos</h2>

      <div class="linha">

        <div class="esquerda">
          <div class="subtitle-container active">
            <span class="icon">
              <img src="<?= get_template_directory_uri() ?>/assets/dist/images/treinamento-palestra.png" alt="Palestras | Grupo Sartori" title="Palestras | Grupo Sartori">
            </span>
            <h3 class="subtitle">Palestras</h3>
          </div>
          <div class="subtitle-container">
            <span class="icon">
              <img src="<?= get_template_directory_uri() ?>/assets/dist/images/treinamento-workshop.png" alt="Workshops | Grupo Sartori" title="Workshops | Grupo Sartori">
            </span>
            <h3 class="subtitle">Workshops</h3>
          </div>
          <div class="subtitle-container">
            <span class="icon">
              <img src="<?= get_template_directory_uri() ?>/assets/dist/images/treinamento-check.png" alt="Entregáveis | Grupo Sartori" title="Entregáveis | Grupo Sartori">
            </span>
            <h3 class="subtitle">Entregáveis</h3>
          </div>
          <div class="subtitle-container">
            <span class="icon">
              <img src="<?= get_template_directory_uri() ?>/assets/dist/images/treinamento-pesquisa.png" alt="Pesquisa de Clima e Diagnóstico Organizacional | Grupo Sartori" title="Pesquisa de Clima e Diagnóstico Organizacional | Grupo Sartori">
            </span>
            <h3 class="subtitle">Pesquisa de Clima e Diagnóstico Organizacional</h3>
          </div>
          <div class="subtitle-container">
            <span class="icon">
              <img src="<?= get_template_directory_uri() ?>/assets/dist/images/treinamento-programa.png" alt="Programa Desligamento | Grupo Sartori" title="Programa Desligamento | Grupo Sartori">
            </span>
            <h3 class="subtitle">Programa Desligamento</h3>
          </div>
        </div>

        <div class="direita content-slider">
          <div class="content">
            <p class="text">
              Nossos conteúdos são personalizados e focados em impactar / provocar as pessoas, de forma que consigam extrair o conteúdo e aplicar no dia a dia. Competências que trabalhamos em nossos conteúdos de desenvolvimento de RH.
            </p>

            <ul class="lista">
              <li class="item">Protagonismo profissional;</li>
              <li class="item">Senso de pertencimento;</li>
              <li class="item">Intraempreendedorismo;</li>
              <li class="item">Liderança;</li>
              <li class="item">Gestão do Tempo;</li>
              <li class="item">Engajamento;</li>
              <li class="item">Comunicação;</li>
              <li class="item">Feedback;</li>
              <li class="item">Entre outros.</li>
            </ul>
          </div>
          <div class="content">
            <p class="text">
              Nossos conteúdos são personalizados e focados em impactar / provocar as pessoas, de forma que consigam extrair o conteúdo e aplicar no dia a dia. Competências que trabalhamos em nossos conteúdos de desenvolvimento de RH.
            </p>

            <ul class="lista">
              <li class="item">Protagonismo profissional;</li>
              <li class="item">Senso de pertencimento;</li>
              <li class="item">Intraempreendedorismo;</li>
              <li class="item">Liderança;</li>
              <li class="item">Gestão do Tempo;</li>
              <li class="item">Engajamento;</li>
              <li class="item">Comunicação;</li>
              <li class="item">Feedback;</li>
              <li class="item">Entre outros.</li>
            </ul>
          </div>
          <div class="content">
            <p class="text">
              Nossos conteúdos são personalizados e focados em impactar / provocar as pessoas, de forma que consigam extrair o conteúdo e aplicar no dia a dia. Competências que trabalhamos em nossos conteúdos de desenvolvimento de RH.
            </p>

            <ul class="lista">
              <li class="item">Protagonismo profissional;</li>
              <li class="item">Senso de pertencimento;</li>
              <li class="item">Intraempreendedorismo;</li>
              <li class="item">Liderança;</li>
              <li class="item">Gestão do Tempo;</li>
              <li class="item">Engajamento;</li>
              <li class="item">Comunicação;</li>
              <li class="item">Feedback;</li>
              <li class="item">Entre outros.</li>
            </ul>
          </div>
          <div class="content">
            <p class="text">
              Nossos conteúdos são personalizados e focados em impactar / provocar as pessoas, de forma que consigam extrair o conteúdo e aplicar no dia a dia. Competências que trabalhamos em nossos conteúdos de desenvolvimento de RH.
            </p>

            <ul class="lista">
              <li class="item">Protagonismo profissional;</li>
              <li class="item">Senso de pertencimento;</li>
              <li class="item">Intraempreendedorismo;</li>
              <li class="item">Liderança;</li>
              <li class="item">Gestão do Tempo;</li>
              <li class="item">Engajamento;</li>
              <li class="item">Comunicação;</li>
              <li class="item">Feedback;</li>
              <li class="item">Entre outros.</li>
            </ul>
          </div>
          <div class="content">
            <p class="text">
              Nossos conteúdos são personalizados e focados em impactar / provocar as pessoas, de forma que consigam extrair o conteúdo e aplicar no dia a dia. Competências que trabalhamos em nossos conteúdos de desenvolvimento de RH.
            </p>

            <ul class="lista">
              <li class="item">Protagonismo profissional;</li>
              <li class="item">Senso de pertencimento;</li>
              <li class="item">Intraempreendedorismo;</li>
              <li class="item">Liderança;</li>
              <li class="item">Gestão do Tempo;</li>
              <li class="item">Engajamento;</li>
              <li class="item">Comunicação;</li>
              <li class="item">Feedback;</li>
              <li class="item">Entre outros.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('includes/cta-analista') ?>
</main>

<?php get_footer(); ?>