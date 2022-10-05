<?php

namespace App\Controllers;

//recursos do framework
use MF\Controller\Action;
use MF\Model\Container;

//models
use App\Models\Produto;
use App\Models\Info;

class IndexController extends Action {

	public function index() {

		$produto = Container::getModels('Produto');

		$produtos = $produto->getProdutos();

		$this->view->dados = $produtos;

		$this->render('index', 'layout1');
	}

	public function sobreNos() {
		
		$info = Container::getModels('info');

		$informacoes = $info->getInfo();

		$this->view->dados = $informacoes;

		$this->render('sobreNos', 'layout1');
	}

}


?>