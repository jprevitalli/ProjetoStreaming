<?php

include_once("header.php");
include_once("../Model/bancoFilme.php");
include_once("../Model/conexao.php");

?>

<div class="container">

    <form action="" method="POST" class="row g-3">



        <div class="col-12">
            <label class="form-label">Digite o nome do filme:</label>
            <input type="text" required name="filme" class="form-control">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Localizar</button>
        </div>

    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Filme</th>
                <th scope="col">Gênero</th>
                <th scope="col">Ano</th>
                <th scope="col">Capa</th>
                <th scope="col">Alterar</th>
                <th scope="col">Apagar</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $filme = isset($_POST["filme"]) ? $_POST["filme"] : "";
            $dado = visuNomeFilme($conexao, $filme);
            foreach ($dado as $dados) :

            ?>
                <tr>
                    <th scope="row"><?= $dados["codfil"] ?></th>
                    <td><?= $dados["nomefil"] ?></td>
                    <td><?= $dados["generofil"] ?></td>
                    <td><?= $dados["anofil"] ?></td>
                    <td><img src="<?= $dados["capafil"] ?>" width="50"></td>
                    <td>
                        <a class="btn btn-primary" href="alterarFilme.php?codigo=<?= $dados["codfil"] ?>">Alterar</a>
                    </td>
                    <td>
                        <form action="../Controller/deleteFilme.php" method="Post">
                            <input type="hidden" name="codfil" value="<?= $dados["codfil"] ?>">
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </td>
                </tr>
            <?php
            endforeach
            ?>
        </tbody>
    </table>


    <?php
    include_once("footer.php");
    ?>