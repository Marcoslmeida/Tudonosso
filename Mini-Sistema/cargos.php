<?php
	require "include/connection.php";
	$sql_cargos = "SELECT * FROM cargo";
	$cargos = $conexao->query($sql_cargos);
	include "layout/header.php"; 
	include "layout/menu.php";
?>
<div class="container">
	<p>&nbsp;</p>
	<h1>Cargos</h1>
	<div class="row">
		 <div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Cargos</li>
			  </ol>
			</nav>
		</div>
	</div>
	
	<div class="row">
		<div class="col">
		<?php include "layout/Mensagem-get.php" ?>
		<a href="novo_cargo.php" class="btn btn-dark mb-2">Novo Cargo</a>
		</div>
	</div>

	<div class="row">
		<div class="col">
		<table class="table table-bordered table-striped table-hover table-dark">
			<tr>
				<th>id</th>
				<th>Categorias</th>
				<th>Ações</th>
			</tr>
	<?php while($cargo = $cargos->fetch_array(MYSQLI_ASSOC)) { ?>
			<tr>
				<td><?php echo $cargo["id"]; ?></td>
				<td><?php echo $cargo["descricao"]; ?></td>
				<td>
					<a href="novo_cargo.php?id=<?php echo $cargo['id']; ?>" class="btn btn-success">
						<i class="fas fa-edit"></i>
					</a>
					<a href="excluir-cargo.php?id=<?php echo $cargo["id"];?>" class="btn btn-danger" onclick="return confirm('Deseja excluir ?')" title="Excluir">
						<i class="fas fa-trash-alt"></i>
					</a>
				</td>
			</tr>
		<?php } ?>
		</table>
		</div>
		</div>
</div>
<?php include "layout/footer.php"; ?>