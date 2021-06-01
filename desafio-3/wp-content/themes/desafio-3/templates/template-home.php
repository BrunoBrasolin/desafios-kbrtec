<?php
// Template name: Página Inicial
?>

<?php get_header(); ?>

<main class="home-page">

  <section class="banner-slider">
    <section class="banner-item">
      <img src="<?= get_template_directory_uri() ?>/assets/dist/images/background-banner.png" alt="" class="background-image">
      <section class="col left">
        <h2 class="welcome">Bem-vindo ao <strong>grupo sartori</strong>
        </h2>
        <h1 class="title">
          treinamento <br />
          recrutamento <br />
          e seleção</h1>
      </section>

      <section class="col middle">
        <p class="text">Assertividade com retenção de talentos, é a nossa especialidade.</p>
        <div class="button-container">
          <a href="#" class="button button-yellow">Para profissionais</a>
          <a href="#" class="button button-black">Para sua empresa</a>
        </div>
      </section>

      <section class="col right">
        <span class="arrow banner-prev-arrow">
          <i data-feather="chevron-left">
          </i>
        </span>

        <span class="arrow banner-next-arrow">
          <i data-feather="chevron-right">
          </i>
        </span>
      </section>
    </section>
    <section class="banner-item">
      <img src="<?= get_template_directory_uri() ?>/assets/dist/images/background-banner.png" alt="" class="background-image">
      <section class="col left">
        <h2 class="welcome">Bem-vindo ao <strong>grupo sartori</strong>
        </h2>
        <h1 class="title">
          treinamento2 <br />
          recrutamento2 <br />
          e seleção</h1>
      </section>

      <section class="col middle">
        <p class="text">Assertividade com retenção de talentos, é a nossa especialidade.</p>
        <div class="button-container">
          <a href="#" class="button button-yellow">Para profissionais</a>
          <a href="#" class="button button-black">Para sua empresa</a>
        </div>
      </section>

      <section class="col right">
        <span class="arrow banner-prev-arrow">
          <i data-feather="chevron-left"></i>
        </span>

        <span class="arrow banner-next-arrow">
          <i data-feather="chevron-right">
          </i>
        </span>
      </section>
    </section>
  </section>

  <section class="encontre">
    <section class="encontre-content">
      <div class="top">
        <span class="icon">
          <i data-feather="search"></i>
        </span>
        <h2 class="title">Encontre vagas por área de especialidade</h2>
      </div>

      <form class="form">
        <div class="input-group">
          <label for="cargo" class="label">Cargo:</label>
          <input type="text" name="cargo" id="cargo" class="input">
        </div>

        <div class="input-group">
          <label for="cidade" class="label">Cidade:</label>
          <input type="text" name="cidade" id="cidade" class="input">
        </div>

        <div class="input-group">
          <label for="estado" class="label">Estado:</label>
          <select type="text" name="estado" id="estado" class="input pequeno estado-input">
            <option value=""></option>
          </select>
        </div>

        <span class="erro">Preencha um campo para fazer a filtragem</span>

        <button type="submit" class="button">Filtrar</button>
      </form>
    </section>
  </section>

  <?php $item_query = new WP_Query(array(
    'post_type' => 'item',
    'posts_per_page' => -1,
  )); ?>

  <section class="itens-grandes-slider">
    <?php if ($item_query->have_posts()) : ?>
      <?php while ($item_query->have_posts()) : $item_query->the_post(); ?>
        <section class="item-grande">
          <div class="left">
            <?php if (get_field('icone')) : ?>
              <img src="<?= get_field('icone') ?>" alt="<?= get_the_title() ?> | Grupo Sartori" title="<?= get_the_title() ?> | Grupo Sartori">
            <?php else : ?>
              <i data-feather="home"></i>
            <?php endif; ?>
            <h2 class="title"><?= get_the_title() ?></h2>
            <p class="text"><?= get_field('texto',) ?></p>
          </div>
          <div class="right">
            <?php if (get_field('banner')) : ?>
              <img src="<?= get_field('banner')['url'] ?>" alt="<?= get_the_title() ?> | Grupo Sartori" title="<?= get_the_title() ?> | Grupo Sartori">
            <?php else : ?>
              <img src="<?= get_template_directory_uri() ?>/assets/dist/images/industria-image.png" alt="<?= get_the_title() ?> | Grupo Sartori" title="<?= get_the_title() ?> | Grupo Sartori">
            <?php endif; ?>
          </div>
        </section>
      <?php endwhile; ?>
    <?php endif; ?>
  </section>
  <div class="effect-content">
    <span class="effect"></span>
  </div>
  <div class="itens-pequenos-container">
    <section class="itens-pequenos-slider">
      <?php if ($item_query->have_posts()) : ?>
        <?php while ($item_query->have_posts()) : $item_query->the_post(); ?>
          <section class="item-pequeno" data-background-color="<?= get_field('cor_fundo') ?>" data-color="<?= get_field('cor_texto') ?>">
            <?php if (get_field('icone')) : ?>
              <img src="<?= get_field('icone') ?>" alt="<?= get_the_title() ?> | Grupo Sartori" title="<?= get_the_title() ?> | Grupo Sartori">
            <?php else : ?>
              <i data-feather="home"></i>
            <?php endif; ?>
            <div class="title"><?= get_the_title() ?></div>
          </section>
        <?php endwhile; ?>
      <?php endif; ?>
    </section>

    <section class="arrows">
      <span class="arrow itens-prev-arrow">
        <i data-feather="chevron-left">
        </i>
      </span>

      <span class="arrow itens-next-arrow">
        <i data-feather="chevron-right">
        </i>
      </span>
    </section>
  </div>

  <section class="numeros">
    <section class="numeros-content">
      <div class="item">
        <h2 class="title">97%</h2>
        <p class="text">Dos candidatos contratados por nós,
          permanecem por pelo menos 15 meses na empresa.</p>
      </div>
      <div class="item">
        <h2 class="title">+10 mil</h2>
        <p class="text">Posições realizadas por nós, somados todo Know How de nosso time.</p>
      </div>
      <div class="item">
        <h2 class="title">+500</h2>
        <p class="text">Mais de 500 clientes atendidos em todo território nacional.</p>
      </div>
      <div class="item">
        <h2 class="title">12</h2>
        <p class="text">Nossa operação está presente em 12 estados do país.</p>
      </div>
    </section>
  </section>

  <section class="precisa">
    <div class="left">
      <div class="map">
        <img src="<?= get_template_directory_uri() ?>/assets/dist/images/map.png" alt="Grupo Sartori" title="Capilaridade nacional, estamos presentes onde você precisa | Grupo Sartori">
      </div>
      <h3 class="subtitle">Onde <br> chegamos:</h3>
      <ul class="list">
        <li class="item">São Paulo</li>
        <li class="item">Mato Grosso</li>
        <li class="item">Minas Gerais</li>
        <li class="item">Bahia</li>
        <li class="item">Goiás</li>
        <li class="item">Paraná</li>
        <li class="item">Rio Grande do Sul</li>
        <li class="item">Santa Catarina</li>
        <li class="item">Pernambuco</li>
        <li class="item">Pará</li>
        <li class="item">Piauí</li>
        <li class="item">Espirito Santo</li>
        <li class="item">Mato Grosso do Sul</li>
        <li class="item">Rio de Janeiro</li>
        <li class="item">Sergipe</li>
        <li class="item">Amapa</li>
      </ul>
    </div>

    <div class="right">
      <h2 class="title">
        <small class="small">Capilaridade nacional</small>
        Estamos presentes onde você precisa.
      </h2>

      <a href="#" class="button">Fale com nosso time</a>
    </div>
  </section>

  <section class="servicos">
    <div class="servicos-content">
      <h2 class="title">Nossos <br> serviços</h2>
      <h3 class="subtitle">Somos especializados em <br> contratação para o setor portuário</h3>

      <ul class="list">
        <div class="list-group">
          <li> <a href="#" class="item">Recrutamento e Seleção</a></li>
          <li> <a href="#" class="item">Desenvolvimento de Liderança</a></li>
          <li> <a href="#" class="item">Desenvolvimento Organizacional</a></li>
        </div>
        <div class="list-group">
          <li> <a href="#" class="item">Formação Atendimento ao Cliente</a></li>
          <li> <a href="#" class="item">Desenvolvimentos de Equipe</a></li>
          <li> <a href="#" class="item">Treinamentos</a></li>
        </div>
        <div class="list-group">
          <li> <a href="#" class="item">Comunicação Intercultural</a></li>
          <li> <a href="#" class="item">Comunicação e habilidades Interpessoais</a></li>
          <li> <a href="#" class="item">Gestão de Talentos</a></li>
        </div>
      </ul>
      <a href="#" class="button">Saiba mais</a>
    </div>
  </section>

  <section class="midia">
    <h2 class="section-title">Saiu na mídia</h2>
    <div class="list">
      <?php for ($i = 1; $i <= 6; $i++) : ?>
        <article class="article">
          <a href="#">
            <h3 class="subtitle"><span class="date">02/09/2020 - </span>Conheça a consultoria mais tecnológica do seguimento de Porto.</h3>
          </a>
        </article>
      <?php endfor; ?>
    </div>

    <a href="#" class="button">
      Veja outras noticias
      <span class="icon">
        <i data-feather="chevron-right" clas="icon"></i>
      </span>
    </a>
  </section>

  <section class="blog">
    <div class="blog-content">
      <h2 class="section-title">últimas do blog</h2>

      <div class="list">
        <?php
        $query = new WP_Query(
          array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'order_by' => 'date',
            'order' => 'DESC',
            'post_status' => 'publish',
          )
        );
        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
        ?>
            <article class="article">
              <div class="article-content">
                <span class="date"><?= get_the_date() ?></span>
                <h3 class="subtitle"><?= get_the_title() ?></h3>
                <p class="text"><?= excerpt(20) ?></p>
              </div>
              <a href="<?= get_the_permalink() ?>" class="link"><i data-feather="plus"></i></a>
            </article>
        <?php
          endwhile;
        endif;
        ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>