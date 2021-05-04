<?php

    include('conexao/conexao.php');

    $sql = "select * from tblteste";
    $qry = mysqli_query($conn,$sql);

    while($linha = mysqli_fetch_array($qry)){
        $idade = $linha['idade']+1;
        $idteste = $linha['idteste'];

        $sql2 = "UPDATE tblteste set idade='$idade' where idteste='$idteste'";
        $qry2 = mysqli_query($conn,$sql2);

    }

    header("Location:index.php");

?>