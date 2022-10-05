<?php

namespace Model;

require_once "../vendor/autoload.php";

class ValidateUser{

    public $usuario_autenticado = false;

    public function login(){

        if(!isset($_GET['logout']) && $_GET['logout']!=1){
            $sql = 'SELECT * FROM usuario';
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->execute();
            $query=$stmt->fetchAll(\PDO::FETCH_ASSOC);

            foreach($query as $user){
                if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
                    $usuario_autenticado = true;
                }
            }
            
                if($usuario_autenticado){
                    header('Location: ../home.php');
                    $_SESSION['autenticado'] = true;
                }else{
                    header('Location: ../index.php?login=erro');
            }
        }
    }

    public function logout(){
        if(isset($_GET['logout']) && $_GET['logout']==1){
            session_destroy();
            header('Location: ../index.php?logout=1');
        }

    }

    public function session(){
        
            session_start();
            $email = $_POST['email'];

            $sql = "SELECT nome,email,nivel FROM usuario WHERE email='$email'";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->execute();
            $query = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            foreach($query as $value)
            $_SESSION['nome'] = $value['nome'];
            $_SESSION['email'] = $value['email'];
            $_SESSION['nivel'] = $value['nivel'];
    }
}
$validate = new ValidateUser();
$validate->session();
$validate->login();
$validate->logout();
?>