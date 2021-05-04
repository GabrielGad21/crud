<?php

include('conexao/conexao.php');
$idteste = $_GET['idteste'];



$sql = "DELETE from tblteste where idteste='$idteste'";

$qry= mysqli_query($conn,$sql);
if($qry){
    header("Location:index.php");
}else{
    echo "Deu ruim... <a href='index.php'>Voltar</a>";
}
?>