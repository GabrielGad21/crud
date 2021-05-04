<?php
include('conexao/conexao.php');

$idteste = $_GET['idteste'];
//echo $idteste;

$sql="select * from tblteste where idteste='$idteste'";
$qry=mysqli_query($conn,$sql);
$linha=mysqli_fetch_array($qry);

$idteste = $linha['idteste'];
$nome = $linha['nome'];
$idade = $linha['idade'];
?>
<form action="updateusuario.php" method="post">
id <input type="text" name="idteste" value="<?php echo $idteste  ?>" readonly>
Nome <input type="text" name="nome" value="<?php echo $nome  ?>" >
Idade <input type="text" name="idade" value="<?php echo $idade  ?>" >
<input type="submit" value="atualizar">

</form>