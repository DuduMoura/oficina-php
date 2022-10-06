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

    public function criar($data) {
        $fields = array_keys($data);
    
        $sql = "INSERT INTO $this->table (";
        $sql .= implode(',', $fields);
        $sql .= ") VALUES (";
    
        foreach ($fields as $key => $item) {
          $params[$item] = $data[$item];
          $sql .= ":$item";
          $sql .= $key + 1 != count($fields) ? "," : ")";
        }
    
        $this->db->montasql($sql);
        $this->db->valoresSQL($params);
        return $this->db->executar();
      }
    
      public function atualizar($id, $data) {
        $fields = array_keys($data);

        $params = ['id' => $id];
    
        $sql = "UPDATE $this->table SET";
        foreach ($fields as $key => $item) {
          $params[$item] = $data[$item];
          $sql .= " $item = :$item";
          $sql .= $key + 1 != count($fields) ? "," : "";
        }
        $sql .= " WHERE id = :id";
    
        $this->db->montasql($sql);
        $this->db->valoresSQL($params);
        return $this->db->executar();
      }
    
      public function deletar($id) {
    
        $sql = "DELETE FROM $this->table";
        $sql .= " WHERE id = :id";
    
        $this->db->montasql($sql);
        $this->db->valoresSQL(['id' => $id]);
        return $this->db->executar();
      }
}