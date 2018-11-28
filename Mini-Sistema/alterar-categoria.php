<?php 
	require "include/connection.php";

	$id = $_POST['id'];
	$descricao = $_POST['descricao'];
	$sql_altera = "UPDATE categoria SET descricao = '{$descricao}' WHERE id = {$id}";
	$conexao->query($sql_altera);
	header("Location: categorias.php");
 ?>