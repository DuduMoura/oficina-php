<?php

class Uteis{
	
	private $mensagem;
	
	function redirect($page){
		echo "<script>location.href='$page';</script>";
	}

	function redirectBack(){
		echo "<script>history.back()</script>";
	}
	
	/**
	 * Setar mensagem no alerta
	 * 
	 * @param string $mensagem
	 * @return void
	 */
	function setMensagem($mensagem){
		$this->mensagem = '
		<div class="alert alert-info alert-dismissible fade show" role="alert">
		'.$mensagem.'
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>';
		$_SESSION['mensagem'] = $this->mensagem;
	}
	
	function getMensagem(){
		$this->mensagem = $_SESSION['mensagem'];
		unset($_SESSION['mensagem']);
		echo $this->mensagem;
	}
}