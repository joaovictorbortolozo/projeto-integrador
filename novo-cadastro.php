<?php
include "cabecalho.php";
include "menu.php";
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Cadastrar novo usuário</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">

        <form action="salvar-usuario.php" method="post">
            <input name="nome" required placeholder="Nome"><br>
            <input type="email" name="email" required placeholder="Email"><br>
            <input type="password" name="senha" required placeholder="Senha"><br>
            <button type="submit" class="btn btn-success">Salvar Usuário</button>
        </form>
        <?php
        $mensagem = $_GET["msg"] ?? "";
        if ($mensagem == "sucesso") {
            echo "<em class='text-success'>Usuário cadastrado com sucesso (●'◡'●).</em>";
        }
        ?>
    </div>
</div>