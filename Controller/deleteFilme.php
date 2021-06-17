<?php

include_once("../View/header.php");
include_once("../Model/bancoFilme.php");
include_once("../Model/conexao.php");

extract($_REQUEST, EXTR_OVERWRITE);

if(deleteFilme($conexao, $codfil)){
    
    
    /* Arrumar abaixo o voltar go back*/
    
    
    echo("<script> alert('O filme foi excluído!') window.history.back(-1)go</script>");
    

}else{
    echo("<p>O filme não foi excluído</p>");
}


include_once("../View/footer.php");

?>

