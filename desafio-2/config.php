<?php

if ($_SERVER['SERVER_NAME'] == 'ambiente-desenvolvimento.provisorio.ws') {
    $GLOBALS['home_url'] = 'http://' . $_SERVER['SERVER_NAME'] . '/bruno-brasolin/desafio-2';
} else {
    $GLOBALS['home_url'] = 'http://' . $_SERVER['SERVER_NAME'] . ':8001';
}


// URLS
$GLOBALS['sobre_url'] = $GLOBALS['home_url'] . '/sobre.php';
$GLOBALS['acomodacoes_url'] = $GLOBALS['home_url'] . '/acomodacoes.php';
$GLOBALS['localizacao_url'] = $GLOBALS['home_url'] . '/localizacao.php';
