<?php

session_start();

function insereUsuario($conexao,$email,$senha){

    $option = ['cost' =>8];

    $senhacryp = password_hash($senha,PASSWORD_BCRYPT,$option);

    $query = "insert into tbusuario(loginusu,senhausu)values('{$email}','{$senhacryp}')";
    $resultado = mysqli_query($conexao,$query);
    return $resultado;
}

function buscarUsuario($conexao,$email){
    
    $query = "select * from tbusuario where loginusu= '{$email}'";

    $resultado = mysqli_query($conexao, $query);
    

    $infoemail = mysqli_fetch_assoc($resultado);
    
    
    $_SESSION["emailusubusca"] = $infoemail["loginusu"];
    $_SESSION["codusubusca"] = $infoemail["codusu"];
    
    return $infoemail;
}