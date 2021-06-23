<?php

include_once("../Model/bancoUsuario.php");
include_once("../Model/conexao.php");



$login = isset($_POST["e-mail"])?strtolower($_POST["e-mail"]):"";
$senha = $_POST["senha"];
$pin = $_POST["pin"];

if(insereUsuario($conexao, $login, $senha, $pin)){
    header("Location: ../View/areaFuncionario.php");
}else{
    header("Location: ../View/areaFuncionario.php");
}