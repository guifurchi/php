<?php

namespace App\Models;

class Produto{

    protected $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function getProdutos(){
        
        $query = "SELECT id, descricao, preco FROM tb_produtos";
        return $this->db->query($query)->fetchALL();


    }
}

?>