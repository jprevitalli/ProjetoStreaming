<?php

include_once("../View/header.php");
include_once("../Model/bancoSerie.php");
include_once("../Model/conexao.php");

extract($_REQUEST, EXTR_OVERWRITE);

if(deleteSerie($conexao, $codserie)){
     
    
    header("Location: ../View/visualizarSerie.php?re=1;javascript:alert('oi')");
    

}else{
    echo("<p>A série não foi excluída</p>");
}


include_once("../View/footer.php");

?>
