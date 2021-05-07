<?php
if ($_SERVER['SERVER_NAME'] == 'ambiente-desenvolvimento.provisorio.ws' || $_SERVER['SERVER_NAME'] == 'localhost') {
    $GLOBALS['home_url'] = 'http://' . $_SERVER['SERVER_NAME'] . '/bruno-brasolin/desafio-2';
} else if ($_SERVER['SERVER_NAME'] == '127.0.0.1') {
    $GLOBALS['home_url'] = 'http://' . $_SERVER['SERVER_NAME'] . ':8001';
} else {
    http_response_code(500);
    die();
}

// URLS
$GLOBALS['sobre_url'] = $GLOBALS['home_url'] . '/o-hostel.php';
$GLOBALS['acomodacoes_url'] = $GLOBALS['home_url'] . '/acomodacoes.php';
$GLOBALS['localizacao_url'] = $GLOBALS['home_url'] . '/localizacao.php';
$GLOBALS['fotos_url'] = $GLOBALS['home_url'] . '/fotos.php';
$GLOBALS['contato_url'] = $GLOBALS['home_url'] . '/contato.php';
$GLOBALS['blog_url'] = $GLOBALS['home_url'] . '/blog.php';
$GLOBALS['blog-integra_url'] = $GLOBALS['home_url'] . '/blog';
