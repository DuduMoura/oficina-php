<?php

class Noticias{
    private $table = 'noticias';
    private $db;

    function __construct() {
        $this->db = new Conexao();
    }

    public function get() {
        $sql = "SELECT noticias.*, categorias.name FROM $this->table INNER JOIN categorias ON categorias.id = noticias.categoria_id";
        $this->db->montasql($sql);
        $this->db->executar();
        return $this->db->converteResultado();
    }

    public function getPeloId($id) {
        $sql = "SELECT noticias.*, categorias.name FROM $this->table INNER JOIN categorias ON categorias.id = noticias.categoria_id";
        $sql .= " WHERE noticias.id = :id";
        $this->db->montasql($sql);
        $this->db->valoresSQL(['id' => $id]);
        $this->db->executar();
        return $this->db->converteResultado();
    }
}