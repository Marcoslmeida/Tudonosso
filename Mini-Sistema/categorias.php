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
		<?php if (isset($_GET['msg']) && isset($_GET['tipo_msg'])){ ?>
		 	<div class="alert alert-<?php echo $_GET['tipo_msg']; ?> col-12">
		 		<?php echo $_GET['msg']; ?>
		 	</div>
		 <?php } ?>
		<a href="nova_categoria.php" class="btn btn-primary">Nova Categoria</a>
		<table class="table table-bordered table-striped table-hover">
			<tr>
				<th>id</th>
				<th>Categorias</th>
				<th>Ações</th>
			</tr>
	<?php while($categoria = $categorias->fetch_array(MYSQLI_ASSOC)) { //aqui eu starto o loop dos dados da consulta ?>
			<tr>
				<td><?php echo $categoria["id"]; ?></td>
				<td><?php echo $categoria["descricao"]; ?></td>
				<td>
					<a href="editarcategoria.php?id=<?php echo $categoria['id']; ?>" class="btn btn-success">
						<i class="fas fa-edit"></i>
					</a>
					<a href="excluircategoria.php?id=<?php echo $categoria["id"];?>" class="btn btn-danger" onclick="return confirm('Deseja excluir ?')" title="Excluir">
						<i class="fas fa-trash-alt"></i>
					</a>
				</td>
			</tr>
		<?php } ?>
		</table>
	</div>
</div>
<?php include "layout/footer.php"; ?>