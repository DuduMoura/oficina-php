<?php

class Usuarios {

  protected $table = 'usuarios';

  protected $db;

  public function __construct()
  {
    $this->db = new Conexao();
  }

  public function isAuthenticated($page = 'login') {
    $util = new Uteis();
    if (!empty($_SESSION['user']) && $page != 'index') {
      $util->redirect('/View/inicio/index.php');
    }
    if ($page == 'index' && empty($_SESSION['user'])) {
      $util->redirect('/View/inicio/index.php?a=login');
    }
  }

  public function login($email, $password)
  {
    $user = $this->verificaLogin($email, md5($password));
    if (!empty($user)) {
      $_SESSION['user'] = $user[0];
      $this->isAuthenticated();
    } else {
      $util = new Uteis();
      $util->setMensagem('Confira seus dados digitados!');
    }
  }

  public function sair()
  {
    $util = new Uteis();
    session_destroy();
    $util->redirect('/index.php');
  }

  public function verificaLogin($email, $senha)
  {
    $sql = "SELECT * FROM $this->table";
    $sql .= " WHERE email = :email";
    $sql .= " and senha = :senha";
    $sql .= " LIMIT 1";
    $this->db->montasql($sql);
    $this->db->valoresSQL(['email' => $email, 'senha' => $senha]);
    $this->db->executar();
    return $this->db->converteResultado();
  }
}