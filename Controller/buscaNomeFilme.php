<?php

include_once("../Model/bancoFilme.php");
include_once("../Model/conexao.php");

$filme = isset($_POST["filme"])?$_POST["filme"]:"";

if(visuNomeFilme($conexao,$filme)){
   
    header("Location: ../View/visualizarFilme.php");
     
    
}else{
    echo("não deu certo");
}