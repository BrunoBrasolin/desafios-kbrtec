<?php
add_theme_support('title-tag');

function scripts()
{

  // CSS
  wp_enqueue_style('slick-slider-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
  wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/dist/css/main.css');

  // JS
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');
  wp_enqueue_script('slick-slider-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
  wp_enqueue_script('feather-icons', 'https://unpkg.com/feather-icons');
  wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/dist/js/main-min.js');
}

add_action('wp_enqueue_scripts', 'scripts');

add_filter('show_admin_bar', '__return_false');
