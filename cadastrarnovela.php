<?php
$conexao = mysqli_connect("localhost", "root","","series");
$titulo = $_POST['titulo'];
$atrizprot = $_POST['atrizprot'];
$atorprot= $_POST['atorprot'];
$totaleps= $_POST['totaleps'];
$sinopse = $_POST['sinopse'];

echo "{$titulo} - {$atrizprot} - {$atorprot} -  {$totaleps} - {$sinopse}";

$sql_inserir = "insert into tabnovelas(titulo, atrizprot, atorprot, totaleps, sinopse) values ('{$titulo}' , '{$atrizprot}' , '{$atorprot}' , {$totaleps} , '{$sinopse}')";

mysqli_query($conexao, $sql_inserir);

mysqli_close($conexao);
?>