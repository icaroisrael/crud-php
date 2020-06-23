<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Atualizar Dados</title>
</head>
<body>
<?php
$num = $_GET['n'];
$nome = $_GET['nome'];
?>

<form method="GET" action="recebe.php" class="form-group row">
    Número <input type="text"  size="2" name="numero" id="numero" readOnly value="<?php echo $num ?>">
    Nome <input type="text" id="nome" name="nome" value="<?php echo $nome?>" ><br>
    <input type="submit" value="Editar" class="btn btn-success">
</form>

</body>
</html>