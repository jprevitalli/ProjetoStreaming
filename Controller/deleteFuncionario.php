<?php

include_once("../View/header.php");
include_once("../Model/bancoFuncionario.php");
include_once("../Model/conexao.php");

extract($_REQUEST, EXTR_OVERWRITE);

if(deleteFuncionario($conexao, $codfun)){
          
     echo("<div class='alert alert-success' role='alert'>O funcionário foi excluído</div>");
    
}else{
     echo("<div class='alert alert-danger' role='alert'> O funcionário não foi excluído</div>");
}


include_once("../View/footer.php");
