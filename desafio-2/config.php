<?php

if ($_SERVER['SERVER_NAME'] == 'ambiente-desenvolvimento.provisorio.ws') {
    $GLOBALS['home_url'] = 'http://' . $_SERVER['SERVER_NAME'] . '/bruno-brasolin/desafio-2';
} else {
    $GLOBALS['home_url'] = 'http://' . $_SERVER['SERVER_NAME'] . ':8001';
}
