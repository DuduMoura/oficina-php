<?php

class Noticias{
    private $table = 'noticias';
    private $db;

    function __construct() {
        $this->db = new Conexao();
    }

    public function get() {
        $sql = "SELECT * FROM $this->table";
        $this->db->montasql($sql);
        $this->db->executar();
        return $this->db->converteResultado();
    }
}