<?php 
	require "include/connection.php";
	$id = $_GET['id'];
	$sql_delete_cargo = "DELETE FROM cargo WHERE id = {$id}";

	if($conexao->query($sql_delete_cargo)) {
	$msg = 'Excluído com sucesso!';
	$tipo_msg = 'success';
} else{
	$msg = 'Não foi possível excluir';
	$tipo_msg = 'danger';
};
	header("Location: cargos.php?msg={$msg}&tipo_msg={$tipo_msg}");