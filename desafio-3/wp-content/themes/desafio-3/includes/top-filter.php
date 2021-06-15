<header class="top-filter">
  <h1 class="title">
    <?= is_blog() ? 'últimas do blog' : 'Saiu na mídia' ?>
  </h1>

  <form class="form">
    <div class="form-header">
      <span class="icon">
        <i data-feather="filter"></i>
      </span>
      <label for="<?= is_blog() ? 'procura' : 'de' ?>" class="label">
        <?= is_blog() ? 'O que você procura' : 'Filtro por período' ?>
      </label>
    </div>
    <?php if (is_blog()) : ?>
      <div class="input-group">
        <input type="text" class="input" name="s" id="procura">
        <button type="submit" class="button right-item">OK</button>
      </div>
      <input type="hidden" class="categoria-input" name="cat">
      <div class="custom-select">
        <div class="label">
          <span class="text">
            Todas as categorias
          </span>
          <span class="right-item">
            <i data-feather="chevron-down"></i>
          </span>
        </div>
        <ul class="dropdown">
          <li data-id="">Todas as categorias</li>
          <?php foreach (get_categories() as $category) : ?>
            <li data-id="<?= $category->term_id ?>"><?= $category->name ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php else : ?>
      <div class="input-group date-input">
        <input type="text" class="input" name="de" id="de" placeholder="De" autocomplete="false">
      </div>
      <div class="input-group date-input">
        <input type="text" class="input" name="ate" id="ate" placeholder="Até" autocomplete="false">
        <button type="submit" class="button right-item">OK</button>
      </div>
    <?php endif; ?>
  </form>
</header>