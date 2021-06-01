<nav class="navbar">
  <div class="mobile-row">
    <h1 class="logo">
      <a href="<?= home_url() ?>">
        <img src="<?= get_template_directory_uri() ?>/assets/dist/images/grupo-sartori-logo.svg" class="img-logo" alt="Grupo Sartori" title="Grupo Sartori">
        <img src="<?= get_template_directory_uri() ?>/assets/dist/images/grupo-sartori-icone.svg" class="img-icone" alt="Grupo Sartori" title="Grupo Sartori">
      </a>
    </h1>

    <span class="hamburguer"><i data-feather="menu"></i></span>
  </div>
  <?php wp_nav_menu(array('theme_location' => 'navbar-top'));  ?>

  <a href="#" class="button">Contatos</a>
</nav>