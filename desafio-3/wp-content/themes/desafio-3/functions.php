<?php
add_theme_support('title-tag');

function styles()
{
  wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/dist/css/main.css');
}

add_action('wp_enqueue_scripts', 'styles');
