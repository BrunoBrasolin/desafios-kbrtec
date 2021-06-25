<?php

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

function add_woocommerce_support()
{
  add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'add_woocommerce_support');


function scripts()
{
  // CSS
  wp_enqueue_style('slick-slider-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
  wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/dist/css/main.css');

  // JS
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');
  wp_enqueue_script('slick-slider-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
  wp_enqueue_script('sweet-alert', 'https://cdn.jsdelivr.net/npm/sweetalert2@11');
  wp_enqueue_script('jquery-mask', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js');
  wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/dist/js/main-min.js');
}

add_action('wp_enqueue_scripts', 'scripts');
