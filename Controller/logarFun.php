<?php

include_once("../Model/conexao.php");
include_once("../Model/bancoUsuario.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

if(buscarAcesso($conexao, $email, $senha)){

    header("Location: ../View/areaFuncionario.php");

}else{

    header("Location: ../View/acessoFun.php");

}

die();

?>
