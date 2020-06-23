<?php
$numero = $_POST['numero'];
$nome = $_POST['nome'];
include ('conexao.php');
//enviar esse dados para o banco
$sql = "INSERT INTO ALUNO(NUMERO, NOME) VALUES($numero, '$nome')";
mysqli_query($con,$sql);
header('Location:cadastro.html');
?>  