 <?php 
require "include/connection.php";
$nome = $_POST['nome'];
$estoque = $_POST['estoque'];
$valor = $_POST['valor'];
$valor = str_replace('.', '' , $valor);
$valor = str_replace(',', '.' , $valor);
$id_categoria = $_POST['id_categoria'];

$sql_insere_produto = "INSERT INTO produto (nome, estoque, valor, id_categoria)
							values ('{$nome}', '{$estoque}', '{$valor}', '{$id_categoria}' )";
if($conexao->query($sql_insere_produto)){
	$msg = "Produto salvo com sucesso!";
	$tipo_msg = "success";
} else {
	$msg = "Não foi possível salvar o produto!";
	$tipo_msg = "danger";
}

header("Location: produtos.php?msg=$msg&tipo_msg=$tipo_msg");
  ?>