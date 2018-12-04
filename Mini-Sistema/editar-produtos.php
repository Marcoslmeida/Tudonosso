<?php 
	include "layout/header.php"; 
	include "layout/menu.php";
	require "include/connection.php";

	$id =$_GET['id'];
	$sql_product = "SELECT * FROM produto WHERE id = {$id}";
	$dados = $conexao->query($sql_product);
	$produto = $dados->fetch_assoc(); 
?>
<div class="container">
	<p>&nbsp;</p>
	<h1>Editar Categoria</h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item active" aria-current="page"><a href="categorias.php">Categorias</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Editar Produto</li>
			  </ol>
			</nav>
		</div>
	</div>
<div class="row">
	<div class="col">
		<form method="post" action="alterar-produto.php">
			<div class="form-group">
				<label for="descricao">Descrição</label>
				<input type="text" name="descricao" id="descricao" class="form-control" required value="<?php echo $produto['nome'] ?>">
				<input type="hidden" name="id" value="<?php echo $produto['id']; ?>">
			</div>
			<button class="btn btn-success" type="submit">Salvar</button>
		</form>
	</div>
</div>
</div>
<?php include "layout/footer.php"; ?>