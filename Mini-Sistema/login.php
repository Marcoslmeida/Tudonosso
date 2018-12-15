<?php 
session_start();
require "include/connection.php";
$login = $_POST['login'];
$senha = md5($_POST['senha']);

$sql_login = "SELECT * FROM usuario 
			  WHERE email = '{$login}' AND senha = '{$senha}'";

$user = $conexao->query($sql_login);
if($user->num_rows > 0) {
	$usuario = $user->fetch_assoc();
	$_SESSION['nome'] = $usuario['nome'];
	$_SESSION['email'] = $usuario['email'];
	$_SESSION['id'] = $usuario['id'];
	header("Location: principal.php?msg=Logado com sucesso&tipo_msg=success");

} else {
	header("Location: index.php?msg=Erro ao logar, acesso negado&tipo_msg=danger");
}

?>