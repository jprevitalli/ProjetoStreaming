<?php

include_once("../Model/bancoUsuario.php");
include_once("../Model/conexao.php");



$login = isset($_POST["login"])?strtolower($_POST["login"]):"";
$senha = $_POST["senha"];

if(insereUsuario($conexao, $login, $senha)){
    header("Location: ../View/areaFuncionario.php");
}else{
    header("Location: ../View/areaFuncionario.php");
}