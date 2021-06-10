<?php

function insereFilme($conexao, $filme, $genero, $sinopse, $ano, $capa, $url){
    $query = "insert into tbfilme(nomefil, generofil, sipnosefil, anofil, capafil, urlfil) values('{$filme}', '{$genero}', '{$sinopse}', '{$ano}', '{$capa}', '{$url}')";
    $resultado = mysqli_query($conexao,$query);
    return $resultado;

};