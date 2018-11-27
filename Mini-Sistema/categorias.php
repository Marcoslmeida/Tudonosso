<?php
	require "include/connection.php";
	$sql_categorias = "SELECT * FROM loja.categoria";
	$categorias = $conexao->query($sql_categorias);
	include "layout/header.php"; 
	include "layout/menu.php";
?>
<div class="container">
	<p>&nbsp;</p>
	<h1>Categorias</h1>
	<div class="row">
		 <div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Categorias</li>
			  </ol>
			</nav>
		</div>
	</div>
	
	<div class="row">
		<a href="nova_categoria.php" class="btn btn-primary">Nova Categoria</a>
		<a href="excluir-categoria.php" class="btn btn-warning">Excluir Categoria</a>
		<table class="table table-bordered table-striped table-hover">
			<tr>
				<th>id</th>
				<th>Categorias</th>
			</tr>
	<?php while($categoria = $categorias->fetch_array(MYSQLI_ASSOC)) { //aqui eu starto o loop dos dados da consulta ?>
			<tr>
				<td><?php echo $categoria["id"]; ?></td>
				<td><?php echo $categoria["descricao"]; ?></td>
			</tr>
		<?php } ?>
		</table>
	</div>
</div>
<?php include "layout/footer.php"; ?>