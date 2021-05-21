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
        <input type="text" name="cargo" id="cargo" class="input">
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

<?php get_footer(); ?>