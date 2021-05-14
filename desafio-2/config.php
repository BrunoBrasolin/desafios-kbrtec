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
$GLOBALS['sobre_url'] = $GLOBALS['home_url'] . '/o-hostel';
$GLOBALS['acomodacoes_url'] = $GLOBALS['home_url'] . '/acomodacoes';
$GLOBALS['localizacao_url'] = $GLOBALS['home_url'] . '/localizacao';
$GLOBALS['fotos_url'] = $GLOBALS['home_url'] . '/fotos';
$GLOBALS['contato_url'] = $GLOBALS['home_url'] . '/contato';
$GLOBALS['blog_url'] = $GLOBALS['home_url'] . '/blog';
$GLOBALS['blog-integra_url'] = $GLOBALS['home_url'] . '/blog';
