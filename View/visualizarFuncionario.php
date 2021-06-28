<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once("header.php");
include_once("../Model/bancoFuncionario.php");
include_once("../Model/conexao.php");
?>


<div class="container">

    <form action="" method="POST" class="row g-3">

        <div class="col-12">
            <label class="form-label">Digite o Nome do Funcionário:</label>
            <input type="text" required name="funcionario" class="form-control">
        </div>

        <div class="col-12">
            <label class="form-label">Digite a Função do Funcionário:</label>
            <input type="text" required name="funcaofuncionario" class="form-control">
        </div>
        
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Localizar</button>
        </div>


    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Código Funcionário</th>
                <th scope="col">Nome Funcionário</th>
                <th scope="col">Telefone Funcionário</th>
                <th scope="col">Função Funcionário</th>
                <th scope="col">Alterar</th>
                <th scope="col">Apagar</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $funcionario = isset($_POST["funcionario"]) ? $_POST["funcionario"] : "";
            $dado = visuNomeFuncionario($conexao, $funcionario);
            foreach ($dado as $dados) :

            ?>
                <tr>
                    <th scope="row"><?= $dados["codfun"] ?></th>
                    <td><?= $dados["nomefun"] ?></td>
                    <td><?= $dados["fonefun"] ?></td>
                    <td><?= $dados["funcaofun"] ?></td>
                    <td>
                        <a class="btn btn-primary" href="alterarFuncionario.php?codigo=<?= $dados["codfun"] ?>">Alterar</a>
                    </td>
                    <td>
                        <form action="../Controller/deleteFuncionario.php" method="Post">
                            <input type="hidden" name="codfun" value="<?= $dados["codfun"] ?>">
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