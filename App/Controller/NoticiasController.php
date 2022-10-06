<?php

$action = isset($_GET['a']) ? $_GET['a'] : 'index';
$noticia = new Noticias();
$util = new Uteis();
switch ($action) {
	case 'create':
    if (!empty($_POST)) {
      if ($noticia->criar($_POST)) {
        $util->setMensagem('Registro criado com sucesso');
        $util->redirect("/View/painel/index.php?p=$page");
      } else {
        $util->setMensagem('Registro não criado');
      }
    }

    $categoria = new Categorias();
    $categorias = $categoria->get();
		break;

  case 'edit':
    if (!empty($_POST) && $_GET['id']) {
      if ($noticia->atualizar($_GET['id'], $_POST)) {
        $util->setMensagem('Registro atualizado com sucesso');
        $util->redirect("/View/painel/index.php?p=$page");
      } else {
        $util->setMensagem('Registro não atualizado');
      }
    }
    $data = $noticia->getPeloId(strval($_GET['id']));
    $data = $data[0];
    $categoria = new Categorias();
    $categorias = $categoria->get();
    break;

  case 'delete':
    if ($noticia->deletar($_GET['id'])) {
      $util->setMensagem('Registro removido com sucesso');
    } else {
      $util->setMensagem('Registro não removido');
    }
    $util->redirectBack();
  break;
	
	default:
		$noticias = $noticia->get();
		break;
}