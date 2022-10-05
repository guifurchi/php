<?php

namespace App\Controllers;

use App\Connection;
use MF\Controller\Action;
use App\Models\Produto;

class IndexController extends Action{

    public function index(){
        //$this->view->dados = array('sofa', 'cama', 'mesa');

        //instancia de Conexão
        $conn = Connection::getDb();
        //Instanciar modelo
        $produto = new Produto($conn);

        $produtos = $produto->getProdutos();

        $this->view->dados = $produtos;

        $this->render('index', 'layout1');
    }
    public function sobreNos(){
        //$this->view->dados = array('tablet', 'notebook', 'smartphone');
        $this->render('sobreNos', 'layout2');
    }

}

?>