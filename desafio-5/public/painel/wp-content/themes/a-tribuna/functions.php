<?php


function register_itens()
{
  register_post_type(
    'faq',
    array(
      'labels' => array(
        'name' => 'FAQ',
        'singular_name' => 'FAQ'
      ),
      'description' => 'Itens do FAQ',
      'public' => true,
      'supports' => array('title'),
      'has_archive' => false,
    )
  );

  register_post_type(
    'desconto',
    array(
      'labels' => array(
        'name' => 'Descontos',
        'singular_name' => 'Desconto'
      ),
      'description' => 'Descontos',
      'public' => true,
      'supports' => array('title'),
      'taxonomies'  => array('category'),
      'has_archive' => false,
      'menu_icon' => 'dashicons-tag',
    )
  );
}
add_action('init', 'register_itens');
