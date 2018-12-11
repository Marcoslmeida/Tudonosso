<?php 
	include "layout/header.php"; 
	include "layout/menu.php";
	require "include/connection.php";

	$title = "Novo Cargo";
	if(isset($_GET['id']) && $_GET['id'] != '') {
		$id = $_GET['id'];
		$sql_cargo = "SELECT * FROM cargo WHERE id = {$id};";
		$cargo = $conexao->query($sql_cargo);
		$dados_cargo = $cargo->fetch_assoc();
		$title = "Editar Cargo";
	}
?>
<div class="container">
	<p>&nbsp;</p>
	<h1><?php echo $title ?></h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item active" aria-current="page"><a href="usuarios.php">Usuários</a></li>
			    <li class="breadcrumb-item active" aria-current="page"><?php echo $title ?></li>
			  </ol>
			</nav>
		</div>
	</div>
	<form method="post" action="salva-cargo.php">
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label for="descricao">Cargo:</label>
						<input type="text" name="descricao" id="descricao" class="form-control" required value="<?php echo (isset($dados_cargo) ? $dados_cargo['descricao'] : '')?>">
						<input type="hidden" name="id" value="<?php echo (isset($dados_cargo) ? $dados_cargo['id'] : ''); ?>">
					</div>
			</div>
			<button type="submit" class="btn btn-dark float-right">Salvar</button>
</form>	
</div>