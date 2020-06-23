<?php
$n = $_GET['nome'];
$nu = $_GET['numero'];
include ('conexao.php');
$sql = "update aluno set nome = '$n' where numero = $nu";
$r = mysqli_query($con, $sql);
header('Location:pesquisar.php');


  
  






?>