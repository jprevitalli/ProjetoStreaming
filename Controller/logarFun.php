<?php
session_start();
include_once("../Model/conexao.php");
include_once("../Model/bancoUsuario.php");

$email = $_POST["email"];
$senha = $_POST["senha"];
$acesso = buscarAcesso($conexao, $email, $senha); 

if($acesso === $email){
   
    header("Location: ../View/areaFuncionario.php");

}else{
    $_SESSION["msg"] = "<div class='alert alert-danger' role='alert'>Os dados não conferem... Tente novamente!</div>";
    header("Location: ../View/acessoFun.php");

}

die();

?>
