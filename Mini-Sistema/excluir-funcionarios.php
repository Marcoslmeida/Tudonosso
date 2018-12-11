<?php 
	require "include/connection.php";
	$id = $_GET['id'];
	$sql_delete_funcionario = "DELETE FROM funcionarios WHERE id = {$id}";

	if($conexao->query($sql_delete_funcionario)) {
	$msg = 'Excluído com sucesso!';
	$tipo_msg = 'success';
} else{
	$msg = 'Não foi possível excluir';
	$tipo_msg = 'danger';
};
	header("Location: funcionarios.php?msg={$msg}&tipo_msg={$tipo_msg}");