<?php
if ($_SERVER['SERVER_NAME'] == 'ambiente-desenvolvimento.provisorio.ws') {
    $GLOBALS['home_url'] = 'http://' . $_SERVER['SERVER_NAME'] . '/bruno-brasolin/desafio-2';

    // URLS
    $GLOBALS['sobre_url'] = $GLOBALS['home_url'] . '/sobre';
    $GLOBALS['acomodacoes_url'] = $GLOBALS['home_url'] . '/acomodacoes';
    $GLOBALS['localizacao_url'] = $GLOBALS['home_url'] . '/localizacao';
    $GLOBALS['fotos_url'] = $GLOBALS['home_url'] . '/fotos';
    $GLOBALS['contato_url'] = $GLOBALS['home_url'] . '/contato';
} else if ($_SERVER['SERVER_NAME'] == '127.0.0.1') {
    $GLOBALS['home_url'] = 'http://' . $_SERVER['SERVER_NAME'] . ':8001';

    // URLS
    $GLOBALS['sobre_url'] = $GLOBALS['home_url'] . '/sobre.php';
    $GLOBALS['acomodacoes_url'] = $GLOBALS['home_url'] . '/acomodacoes.php';
    $GLOBALS['localizacao_url'] = $GLOBALS['home_url'] . '/localizacao.php';
    $GLOBALS['fotos_url'] = $GLOBALS['home_url'] . '/fotos.php';
    $GLOBALS['contato_url'] = $GLOBALS['home_url'] . '/contato.php';
}
