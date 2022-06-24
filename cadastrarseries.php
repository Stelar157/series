<?php
$conexao = mysqli_connect("localhost", "root","","series");
$titulo = $_POST['titulo'];
$atriz_principal = $_POST['atriz_principal'];
$ator_principal= $_POST['ator_principal'];
$qtd_temp= $_POST['qtd_temp'];
$total_eps= $_POST['total_eps'];
$sinopse = $_POST['sinopse'];

echo "{$titulo} - {$atriz_principal} - {$ator_principal} - {$qtd_temp} - {$total_eps} - {$sinopse}";

$sql_inserir = "insert into tabseries(titulo, atriz_principal, ator_principal, qtd_temp, total_eps, sinopse) values ('{$titulo}' , '{$atriz_principal}' , '{$ator_principal}' , {$qtd_temp} , {$total_eps} , '{$sinopse}')";

mysqli_query($conexao, $sql_inserir);

mysqli_close($conexao);
?>