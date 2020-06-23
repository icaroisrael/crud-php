<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
</head>
<body>
<?php
$n = $_GET['numero'];
include ('conexao.php');
$sql = "DELETE FROM ALUNO WHERE NUMERO = $n";
mysqli_query($con, $sql);
header("Location:pesquisar.php");

?>
</body>
</html>

