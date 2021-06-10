<?php

function insereSerie($conexao, $serie, $ano, $temporada, $episodio, $genero, $capa, $url, $sinopse){
    $query = "insert into tbserie(nomeserie, anoserie, temporadaserie, episodioserie, generoserie, capaserie, urlserie, sinopseserie) values('{$serie}', '{$ano}', '{$temporada}', '{$episodio}', '{$genero}', '{$capa}', '{$url}', '{$sinopse}')";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;

}