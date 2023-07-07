<?php
$Email = $_POST["Email"];
$Senha = $_POST["Senha"];
$Nome = $_POST["Nome"];

include "conexao.php";

$sql_inserir_usuario = " insert into usuario (nome,email,senha ) values('$Nome','$Email', ' ".md5($Senha). " ' )";

$um_usuario = mysqli_query($conexao, $sql_inserir_usuario); 

mysqli_close($conexao);

header("location:novo-usuario.php?msg=sucesso");
?>