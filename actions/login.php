<?php
session_start();
require_once "../functions/validate.php";
require_once "../autoload.php";
$usuario = new Usuario();
if(isset($_POST['btn'])){
    $email = validate($_POST['email']);
    $senha = validate($_POST['senha']);

    if($email && $senha){
        if($usuario->login($email, $senha)){
            $_SESSION['user'] = $usuario->dados($email);
            header("location:../?page=home");
        }else{
            $_SESSION['msg_error'] = 'email ou senha inválidos';
            header("location:../?page=login");     
        }
    }else{
        $_SESSION['msg_error'] = 'preencha todos os campos';
        header("location:../?page=login");
    }

}else{
    $_SESSION['msg_error'] = 'preencha todos os campos';
    header("location:../?page=login");
}
