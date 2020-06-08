<?php

if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
}else{
    header("location:?page=login");
}
?>
<h1>Bem vindo <?= $user; ?> </h1>