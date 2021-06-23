<?php

session_start();

function insereUsuario($conexao, $email, $senha, $pin)
{

    $option = ['cost' => 8];

    $senhacryp = password_hash($senha, PASSWORD_BCRYPT, $option);

    $query = "insert into tbusuario(loginusu,senhausu, pinusu)values('{$email}','{$senhacryp}','{$pin}')";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function buscarUsuario($conexao, $email)
{

    $query = "select * from tbusuario where loginusu= '{$email}'";

    $resultado = mysqli_query($conexao, $query);


    $infoemail = mysqli_fetch_assoc($resultado);


    $_SESSION["emailusubusca"] = $infoemail["loginusu"];
    $_SESSION["codusubusca"] = $infoemail["codusu"];

    return $infoemail;
}

function buscarAcesso($conexao, $email, $senha)
{

    $query = "select * from tbusuario where loginusu= '{$email}'";

    $resultado = mysqli_query($conexao, $query);


    if (mysqli_num_rows($resultado) > 0) {
        $linha = mysqli_fetch_assoc($resultado);
        if (password_verify($senha, $linha["senhausu"])) {
            $_SESSION["email"] = $linha["loginusu"];
            $_SESSION["codusu"] = $linha["codusu"];

            return $linha["loginusu"];
        } else {

            return $linha["loginusu"];
        }
    }
}

function trocarsenhausuario($conexao, $email, $novasenha, $pin)
{
    //verificar se o email e o pin estão corretos
    $query = "Select * from tbusuario where loginusu='{$email}' and pinusu='{$pin}'";
    $retorno = mysqli_query($conexao, $query);

    if (mysqli_num_rows($retorno) > 0) {
        $retornoArray = mysqli_fetch_assoc($retorno);
        $codusu = $retornoArray["codusu"];

        //criptografar a senha
        $option = ['cost' => 8];
        $senha = password_hash($novasenha, PASSWORD_BCRYPT, $option);
        //alterar a senha no banco  
        $query = "update tbusuario set senhausu='{$senha}' where codusu ='{$codusu}'";
        $resultado = mysqli_query($conexao, $query);

        return $resultado;
    } else {
        $resultado = "erro";
        return $resultado;
    }
}
