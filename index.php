<?php
ini_set('default_charset','UTF-8');
//header("Content-type: text/html; charset=utf-8");
include("conexao/conexao.php");
$sql ="select * from tblteste";
$qry = mysqli_query($conn,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .alinhar{
        text-align: center;
    }
    </style>
</head>
<body>
    <h1>Usuários</h1>
    <hr>
    <a href="aumentaridade.php">Aumentar idade</a><br>
    <a href="cadastrar.php">Cadastrar Novo</a><br>

    <table border='1'>
    <tr>
    <td>Id</td>
    <td>Nome</td>
    <td>Idade</td>
    <td>Ações</td>
    </tr>

    <?php

    while ($linha=mysqli_fetch_array($qry)){
     
        echo "<tr>";
        echo "<td>".$linha['idteste']."</td>";
        echo "<td>".$linha['nome']."</td>";
        echo "<td>".$linha['idade']."</td>";
        echo "<td class='alinhar'>
            <a href='editar.php?idteste={$linha["idteste"]}'>Editar</a> |
            <a href='excluir.php?idteste={$linha["idteste"]}'>Excluir</a>
              </td> ";
        echo "</tr>";

    }

    ?>

    </table>

</body>
</html>