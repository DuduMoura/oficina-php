<?php 
require_once '../../Autoload.php';
require_once '../components/cabecalho.php'; 
//Altere para o mesmo nome da pasta que está acessando
$page = isset($_GET['p']) ? $_GET['p'] : 'news';
$user = new Usuarios();
$user->isAuthenticated('index');

switch($page)
{
	case 'categories':
		echo 'Criar a parte de categorias';
	break;
  default:
		include_once ("pages/noticias/index.php");
	break;
}

require_once '../components/rodape.php';