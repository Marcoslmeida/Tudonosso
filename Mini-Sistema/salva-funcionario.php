<?php 
require "include/connection.php";
$id = $_POST['id'];
$id_cargo = $_POST['id_cargo'];
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$dt_nascimento = $_POST['dt_nascimento'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$dt_admissao = $_POST['dt_admissao'];


if($id != '') {
	$sql_funcionario = "UPDATE funcionarios SET id_cargo = '{$id_cargo}', cpf = '{$cpf}', nome = '{$nome}', matricula = '{$matricula}', dt_nascimento = '{$dt_nascimento}', telefone = '{$telefone}', email = '{$email}', dt_admissao = '{$dt_admissao}' WHERE id = {$id};";
	/*print_r($sql_funcionario); exit;*/
	$msg = "Funcionario alterado com sucesso!";
} else {
	$sql_funcionario = "INSERT INTO funcionarios (id_cargo, cpf, nome, matricula, dt_nascimento, telefone, email, dt_admissao)
					Values ('{$id_cargo}', '{$cpf}', '{$nome}', '{$matricula}', '{$dt_nascimento}', '{$telefone}', '{$email}', '{$dt_admissao}' )";
	$msg = "Funcionario salvo com sucesso!";
}

if($conexao->query($sql_funcionario)){
	$tipo_msg = "success";
} else {
	$msg = "Não foi possível salvar o funcionario!";
	$tipo_msg = "danger";
}

header("Location: funcionarios.php?msg=$msg&tipo_msg=$tipo_msg");
  ?>