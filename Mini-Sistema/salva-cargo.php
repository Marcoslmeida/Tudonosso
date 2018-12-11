<?php 
require "include/connection.php";
$id = $_POST['id'];
$descricao = $_POST['descricao'];
if($id != '') {
	$sql_cargo = "UPDATE cargo SET descricao = '{$descricao}' WHERE id = '$id'";
	$msg = "Usuário alterado com sucesso!";
} else {
	$sql_cargo = "INSERT INTO cargo (descricao)
					Values ('{$descricao}')";
	$msg = "Usuário salvo com sucesso!";
}

if($conexao->query($sql_cargo)){
	$tipo_msg = "success";
} else {
	$msg = "Não foi possível salvar o Usuário!";
	$tipo_msg = "danger";
}

header("Location: cargos.php?msg=$msg&tipo_msg=$tipo_msg");
  ?>