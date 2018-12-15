<?php 
require "include/connection.php";
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['e-mail'];
$senha = $_POST['senha'];
$nova_senha = md5($senha);
if($id != '') {
	if ($senha == '') {
	$sql_usuario = "UPDATE usuario SET nome = '{$nome}', email = '{$email}' WHERE id = {$id};";
	} else{
	$sql_usuario = "UPDATE usuario SET nome = '{$nome}', email = '{$email}', senha = '{$nova_senha}' WHERE id = {$id};";
	}
	$msg = "Usuário alterado com sucesso!";
} else {
	$sql_usuario = "INSERT INTO usuario (nome, email, senha)
					Values ('{$nome}', '{$email}', '{$nova_senha}')";
	$msg = "Usuário salvo com sucesso!";
}

if($conexao->query($sql_usuario)){
	$tipo_msg = "success";
} else {
	$msg = "Não foi possível salvar o Usuário!";
	$tipo_msg = "danger";
}

header("Location: usuarios.php?msg=$msg&tipo_msg=$tipo_msg");
  ?>