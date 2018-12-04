<?php 
	require "include/connection.php";
	$id = $_GET['id'];
	$sql_delete = "DELETE FROM categoria WHERE id = {$id}";
	if($conexao->query($sql_delete)) {
	$msg = 'Registro excluído com sucesso!';
	$tipo_msg = 'success';
} else{
	$msg = 'Não foi possível excluir';
	$tipo_msg = 'danger';
};
	header("Location: categorias.php?msg={$msg}&tipo_msg={$tipo_msg}");
?>
