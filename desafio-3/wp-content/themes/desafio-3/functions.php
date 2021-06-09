<?php
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

function register_itens()
{
  register_post_type(
    'item',
    array(
      'labels' => array(
        'name' => 'Itens',
        'singular_name' => 'Item'
      ),
      'description' => 'Adicione os itens da home',
      'public' => true,
      'supports' => array('title'),
      'has_archive' => false,
    )
  );

  register_post_type(
    'midia',
    array(
      'labels' => array(
        'name' => 'Saiu na mídia',
        'singular_name' => 'Mídia'
      ),
      'description' => 'Adicione uma notícia que saiu em alguma mídia',
      'public' => true,
      'supports' => array('title'),
      'has_archive' => true,
      'menu_icon' => 'dashicons-camera'
    )
  );

  register_post_type(
    'banners_home',
    array(
      'labels' => array(
        'name' => 'Banners Home',
        'singular_name' => 'Banner Home'
      ),
      'description' => 'Banners da home',
      'public' => true,
      'supports' => array('title'),
      'has_archive' => false,
    )
  );

  register_post_type(
    'servicos',
    array(
      'labels' => array(
        'name' => 'Serviços',
        'singular_name' => 'Serviço'
      ),
      'description' => 'Serviços prestados pela Sartori',
      'public' => true,
      'supports' => array('title'),
      'has_archive' => false,
    )
  );

  register_post_type(
    'numeros',
    array(
      'labels' => array(
        'name' => 'Números',
        'singular_name' => 'Numero'
      ),
      'description' => 'Numeros que a empresa alcançou',
      'public' => true,
      'supports' => array('title'),
      'has_archive' => false,
    )
  );
}
add_action('init', 'register_itens');

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
  wp_enqueue_script('date-picker', 'https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js');
  wp_enqueue_script('jquery-mask', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js');
  wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/dist/js/main-min.js');
}

add_action('wp_enqueue_scripts', 'scripts');

add_filter('show_admin_bar', '__return_false');

function remove_wordpress_version()
{
  return '';
}
add_filter('the_generator', 'remove_wordpress_version');

function my_excerpt_length($length)
{
  return 20;
}
add_filter('excerpt_length', 'my_excerpt_length');

function new_excerpt_more($more)
{
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


function excerpt($limit)
{
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt) >= $limit) {
    array_pop($excerpt);
    $excerpt = implode(" ", $excerpt) . '...';
  } else {
    $excerpt = implode(" ", $excerpt);
  }
  $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
  return $excerpt;
}

function navbar()
{
  register_nav_menu('navbar-top', __('Navbar Top'));
}
add_action('init', 'navbar');

function is_blog()
{
  global  $post;
  $posttype = get_post_type($post);
  return (((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ($posttype == 'post')) ? true : false;
}

add_action('admin_init', 'remove_textarea');

function remove_textarea()
{
  remove_post_type_support('page', 'editor');
}
