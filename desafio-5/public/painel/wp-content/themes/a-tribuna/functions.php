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
}
add_action('init', 'register_itens');
