<?php

include_once("../View/header.php");
include_once("../Model/bancoFilme.php");
include_once("../Model/conexao.php");

extract($_REQUEST, EXTR_OVERWRITE);

if(deleteFilme($conexao, $codfil)){
         
    header("Location: ../View/visualizarFilme.php?re=1;javascript:alert('oi')");
    

}else{
    echo("<p>O filme não foi excluído</p>");
}


include_once("../View/footer.php");

?>

