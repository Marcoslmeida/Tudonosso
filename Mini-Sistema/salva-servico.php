<?php 
require "include/connection.php";
$id = $_POST['id'];
$id_categoria = $_POST['id_categoria'];
$id_funcionario = $_POST['id_funcionario'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$valor = str_replace('.', '' , $valor);
$valor = str_replace(',', '.' , $valor);
$dt_inicio = $_POST['dt_inicio'];
$dt_fim = $_POST['dt_fim'];
$status = $_POST['status'];


if($id != '') {
	$sql_servicos = "UPDATE servicos SET id_categoria = '{$id_categoria}', id_funcionario = '{$id_funcionario}', descricao = '{$descricao}', valor = '{$valor}', dt_inicio = '{$dt_inicio}', dt_fim = '{$dt_fim}', status = '{$status}' WHERE id = {$id};";
	/*print_r($sql_servicos); exit;*/
	$msg = "Serviços alterado com sucesso!";
} else {
	$sql_servicos = "INSERT INTO servicos (id_categoria, id_funcionario, descricao, valor, dt_inicio, dt_fim, status)
					Values ('{$id_categoria}', '{$id_funcionario}', '{$descricao}', '{$valor}', '{$dt_inicio}', '{$dt_fim}', '{$status}')";
		/*print_r($sql_servicos); exit;*/
	$msg = "Serviços salvo com sucesso!";
}
/*echo $sql_servicos; exit*/;
if($conexao->query($sql_servicos)){
	$tipo_msg = "success";
} else {
	$msg = "Não foi possível salvar o serviço!";
	$tipo_msg = "danger";
}

header("Location: servicos.php?msg=$msg&tipo_msg=$tipo_msg");
  ?>