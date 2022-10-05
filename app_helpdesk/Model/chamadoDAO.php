<?php

namespace Model;
require_once "conexao.php";

class ChamadoDao{

    public function create(){
        print_r($_POST);
        echo '<br>';

        $text = implode(';',$_POST);
        $text = $text.PHP_EOL;

        $arquivo = fopen('arquivo.hd','a');
        fwrite($arquivo,$text);
        fclose($arquivo);
        header('location: ../abrir_chamado.php');
    }

    public function read(){
        
        $sql = 'SELECT * FROM chamado';
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

$c = new ChamadoDao();
$c->create();
