<?php get_header(); ?>

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
        <input type="text" name="cargo" id="cargo" class="input" placeholder="">
      </div>
      <div class="input-group">
        <label for="cidade" class="label">Cidade:</label>
        <input type="text" name="cidade" id="cidade" class="input">
      </div>
      <div class="input-group">
        <label for="estado" class="label">Estado:</label>
        <input type="text" name="estado" id="estado" class="input">
      </div>

      <button type="submit" class="button">Filtrar</button>
    </form>
  </section>
</section>

<section class="itens-grandes-slider">
  <?php for ($i = 0; $i <= 10; $i++) :  ?>
    <section class="item-grande">
      <div class="left">
        <i data-feather="home"></i>

        <h2 class="title">Indústria - <?= $i ?></h2>

        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>

      <div class="right">
        <img src="<?= get_template_directory_uri() ?>/assets/dist/images/industria-image.png" alt="Industria">
      </div>
    </section>
  <?php endfor; ?>
</section>

<div class="itens-pequenos-container">
  <section class="itens-pequenos-slider">
    <?php for ($i = 0; $i <= 10; $i++) :  ?>
      <section class="item-pequeno" data-background-color="#345" data-color="#fff">
        <i data-feather="home"></i>
        <div class="title">Indústria - <?= $i ?></div>
      </section>
    <?php endfor; ?>
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
  <h2 class="title">Saiu na mídia</h2>
  <div class="list">
    <?php for ($i = 1; $i <= 6; $i++) : ?>
      <article class="article">
        <a href="#">
          <h3 class="subtitle"><span class="date">02/09/2020 - </span>Conheça a consultoria mais tecnológica do seguimento de Porto.</h3>
        </a>
      </article>
    <?php endfor; ?>
  </div>
</section>

<?php get_footer(); ?>