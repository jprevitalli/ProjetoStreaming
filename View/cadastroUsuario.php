<?php

include("header.php");
?>

<div class="container">

    <form action="../Controller/inserirUsuario.php" method="POST" class="row g-3">

        <div class="col-12">
            <label for="inputLogin" class="form-label">E-mail</label>
            <input type="e-mail" name="e-mail" class="form-control" id="inputLogin">
        </div>

        <div class="col-12">
            <label for="inputSenha" class="form-label">Senha</label>
            <input type="password" name="senha" class="form-control" id="inputSenha">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>

        </div>

    </form>

</div>

<?php

include("footer.php");


?>