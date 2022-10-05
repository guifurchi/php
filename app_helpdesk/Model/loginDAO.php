<?php

namespace Model;
require_once "conexao.php";

class LoginDao{

    public function create(){
        //
    }

    public function read(){
        
        $sql = 'SELECT * FROM usuario';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        $query=$stmt->fetchAll(\PDO::FETCH_ASSOC);
        
        /*
        foreach($query as $value){
            echo $value['nome'];
        }
        */
    }

    public function update(){
        //
    }

    public function delete(){
        //
    }
}
