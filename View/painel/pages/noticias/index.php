<?php 
require_once ('../../App/Controller/NoticiasController.php'); 

switch($action)
{
  case 'create':
		include_once ('form.php');
	break;
	case 'edit':
		include_once ('form.php');
	break;
  default:
		include_once ('list.php');
	break;
}