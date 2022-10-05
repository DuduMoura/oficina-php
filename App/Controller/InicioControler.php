<?php  require_once '../../Autoload.php';
switch($acao) {
    case 'detalhe':
        break;
    default: 
        $noticia = new Noticias();
        $noticias = $noticia->get();
        var_dump($noticias);
    break;
}