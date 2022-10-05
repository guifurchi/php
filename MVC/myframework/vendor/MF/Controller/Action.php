<?php

namespace MF\Controller;

use App\Controllers\IndexController;

abstract class Action{

    protected $view;

    public function __construct(){
        $this->view = new \stdClass();
    }

    protected function render($view, $layout){
        $this->view->page = $view;
        require_once "../App/Views/".$layout.".phtml";
    }

    protected function content(){
        $class = get_class($this);
        $class = str_replace('App\\Controllers\\','',$class);
        $class = strtolower(str_replace('Controller','',$class));

        require_once "../App/Views/".$class."/".$this->view->page.".phtml";
    }
}

?>