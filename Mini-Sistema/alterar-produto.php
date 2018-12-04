<?php 
	require "include/connection.php";

	$nome = $_POST['nome'];
	$estoque = $_POST['estoque'];
	$valor = $_POST['valor'];
	$valor = str_replace('.', '' , $valor);
	$valor = str_replace(',', '.' , $valor);
	$id_categoria = $_POST['id_categoria'];
	$sql_altera_product = "UPDATE produto SET nome, estoque, valor, id_categoria = ('{$nome}', '{$estoque}', '{$valor}', '{$id_categoria}' WHERE id = {$id}";
	if($conexao->query($sql_altera_product)){
		$msg = 'Registro alterado com sucesso!';
		$tipo_msg = 'success';
	} else{
		$msg = 'Não foi possível alterar';
		$tipo_msg = 'danger';
	}
	header("Location: produtos.php?msg={$msg}&tipo_msg={$tipo_msg}");
 ?>