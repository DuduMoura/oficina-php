<?php

class Conexao {
    private $db;
    private $stmt;
    private $host = 'localhost';
    private $db_name = 'news';
    private $db_username = 'root';
    private $db_password = 'root';

    function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=$this->host;dbname=$this->db_name;charset=utf8", $this->db_username, $this->db_password);
        } catch(PDOException $e) {
            die('Erro ao conectar no banco');
        }
    }

    public function montasql($sql) {
        $this->stmt = $this->db->prepare($sql);
    }

    public function valoresSQL($values) {
        foreach($values as $chave => $item) {
            $this->stmt->bindValue(":$chave", $item);
        }
    }

    public function executar() {
        try {
            $resultado = $this->stmt->execute();
            if (!$resultado) {
                die('Erro na consulta');
            }
            return true;
        } catch(Exception $e) {
            die('Erro na consulta');
        }
    }

    public function converteResultado() {
        return $this->stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
   
}