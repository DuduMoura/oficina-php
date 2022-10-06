<?php  require_once '../../Autoload.php';
switch($acao) {
    case 'detalhe':
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $noticia = new Noticias();
            $item = $noticia->getPeloId($id);
            $item = $item[0] ?? null;
        }
        break;
    default: 
        $noticia = new Noticias();
        $noticias = $noticia->get();
    break;
}