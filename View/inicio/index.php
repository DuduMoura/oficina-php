<?php
require_once '../components/cabecalho.php';
$pagina = 'inicio';
$acao = isset($_GET['a']) ? $_GET['a'] : 'noticias';

switch ($acao) {
    case 'detalhe':
        require_once 'pages/detalhe.php';
        break;
    default: 
        require_once 'pages/noticias.php';
    break;
}