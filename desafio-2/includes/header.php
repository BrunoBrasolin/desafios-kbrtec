<?php require_once './config.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/main.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $GLOBALS['home_url'] ?>/public/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $GLOBALS['home_url'] ?>/public/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $GLOBALS['home_url'] ?>/public/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>House & Hostel</title>
</head>

<body>
    <header class="cabecalho">
        <?php include_once 'topo.php'; ?>
        <section class="conteudo">
            <div class="primeira-linha">
                <div class="esquerda">
                    <a class="link link-whatsapp" href="https://api.whatsapp.com/send?phone=5500000000000" target="_blank" title="WhatsApp | House & Hostel">
                        <i class="fab fa-lg fa-whatsapp"></i>
                        (00) 00000-0000
                    </a>
                </div>

                <div class="meio">
                    <a href="<?= $GLOBALS['home_url'] ?>">
                        <h1><img src="public/img/logo.jpg" class="logo" alt="Logo House & Hostel" title="Logo House & Hostel"></h1>
                    </a>
                </div>

                <div class="direita">
                    <a class="link link-reserva" href="/faca-sua-reserva" title="Faça sua Reserva | House & Hostel">
                        <i class="far fa-lg fa-calendar-alt"></i>
                        Faça sua Reserva
                    </a>
                </div>
            </div>

            <nav class="segunda-linha">
                <div class="mobile-linha">
                    <a href="<?= $GLOBALS['home_url'] ?>">
                        <h1 class="mobile-logo">
                            <img src="public/img/logo.jpg" class="imagem-mobile-logo" alt="Logo House & Hostel" title="Logo House & Hostel">
                        </h1>
                    </a>
                    <button class="mobile-menu">
                        <i class="fas fa-lg fa-bars"></i>
                        Menu
                    </button>
                </div>

                <ul class="itens">
                    <li><a href="<?= $GLOBALS['sobre_url'] ?>" class="item" id="sobre">O HOSTEL</a></li>
                    <li><a href="<?= $GLOBALS['acomodacoes_url'] ?>" class="item" id="acomodacoes">ACOMODAÇÃO</a></li>
                    <li><a href="/" class="item">FOTOS</a></li>
                    <li class="logo-item">
                        <a href="<?= $GLOBALS['home_url'] ?>" class="item logo-item-container">
                            <h1><img src="public/img/full-logo.png" class="logo-lista" alt="Logo House & Hostel" title="Logo House & Hostel"></h1>
                        </a>
                    </li>
                    <li><a href="/" class="item">BLOG</a></li>
                    <li><a href="<?= $GLOBALS['sobre_url'] ?>" class="item" id="localizacao">LOCALIZAÇÃO</a></li>
                    <li><a href="/" class="item">CONTATOS</a></li>
                    <li class="mobile-item">
                        <a class="link link-whatsapp" href="https://api.whatsapp.com/send?phone=5500000000000" target="_blank" title="WhatsApp | House & Hostel">
                            <i class="fab fa-lg fa-whatsapp"></i>
                            (00) 00000-0000
                        </a>
                    </li>
                    <li class="mobile-item">
                        <a class="link link-reserva" href="/faca-sua-reserva" title="Faça sua Reserva | House & Hostel">
                            <i class="far fa-lg fa-calendar-alt"></i>
                            Faça sua Reserva
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
    </header>