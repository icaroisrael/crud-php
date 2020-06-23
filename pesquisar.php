<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Pesquisar</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        .conteudo{
            width:300px;
        }
    </style>
</head>
<body>
    <a href="index.html">HOME</a>
    <p>Todos os aluno</p> 
    <div class="conteudo">
    <table border="0" class="table-dark">  
    
        <tr>
            <td>número</td>
            <td>nome</td>  
            <td>deletar</td>
            <td>Atualizar</td> 
        </tr> 
    <?php
        include ('conexao.php');    

        $sql = "SELECT * FROM ALUNO";
        $resultado = mysqli_query($con, $sql);
        if($resultado){
            while($row = mysqli_fetch_array($resultado)){?>
            <tr>
                <td><?php echo $row['NUMERO'] ?> </td>
                <td><?php echo $row['NOME'] ?> </td>
                <td align="center"><a href="deletar.php?numero=<?php echo $row['NUMERO']; ?>"><img src="img/lixeira.png" width="16px" > </td>
                <td align="center"><a href="atualizar.php?n=<?php echo $row['NUMERO'];?> &nome=<?php echo $row['NOME'];?>"><img src="img/editar.png" width="16px"></td>
            </tr>
            <?php               
        }
    }
    ?>
    <table>

    </div> 
    
</body>
</html>