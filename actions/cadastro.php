<?php
session_start();
require_once "../functions/validate.php";
require_once "../autoload.php";
$usuario = new Usuario();

if(isset($_POST['btn'])){
    $nome = validate($_POST['nome']);
    $email = validate($_POST['email']);
    $senha = validate($_POST['senha']);

    if($nome && $email && $senha){
        if($usuario->create($nome, $email, $senha)){
            $_SESSION['msg_success'] = "Usuário cadastrado com sucesso";
            header("location:../?page=login");
        }
        else{
            $_SESSION['msg_error'] = "Já existe um usuário cadastrado com esse email";
            header("location:../?page=login");
        }
        
    }else{
        $_SESSION['msg_error'] = "Preencha todos os campos";
        header("location:../?page=cadastro");    
    }

}else{
    header("location:../?page=cadastro");
}


