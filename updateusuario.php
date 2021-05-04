<?php

include('conexao/conexao.php');
$idteste = $_POST['idteste'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];


$sql = "UPDATE tblteste set nome='$nome',idade='$idade' where idteste='$idteste'";

$qry= mysqli_query($conn,$sql);
if($qry){
    header("Location:index.php");
}else{
    echo "Deu ruim... <a href='index.php'>Voltar</a>";
}
?>