<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head() ?>
  <title><?= wp_title() ?>aa</title>
</head>

<body>

  <header class="header">
    <?php get_template_part('includes/navbar'); ?>
  </header>