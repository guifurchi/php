<?php

namespace Model;

class Conexao{

    private static $instance;

    public static function getConn(){

        if(!isset(self::$instance)):
            self::$instance = new \PDO("mysql:host=localhost:3312; dbname=ajax_cadastro", 'root' ,'');
            self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        endif;
        return self::$instance;
    }
}