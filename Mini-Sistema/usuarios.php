<?php 
	require "include/connection.php";
	$sql_usuarios = "SELECT * FROM loja.usuario";
	$usuarios = $conexao->query($sql_usuarios);
	include "layout/header.php";
	include "layout/menu.php";
?>
<div class="container">
	<p>&nbsp;</p>
	<h1>Usuários</h1>
	<div class="row">
		<div class="col-12">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb bg-dark">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Usuários</li>
			  </ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col">
		<?php include "layout/mensagem-get.php" ?>
		<a href="novo-usuario.php" class="btn btn-dark mb-2">Novo Usuário</a>
		</div>
	</div>
	<div class="row">
		<div class="col">
		<table class="table table-bordered table-striped table-hover table-dark">
			<tr>
				<th>Id</th>
				<th>Nome</th>
				<th>Email</th>
			</tr>
		<?php while ($usuario = $usuarios->fetch_array(MYSQLI_ASSOC)) { ?>
			<tr>
				<td><?php echo $usuario ["id"]; ?></td>
				<td><?php echo $usuario ["nome"]; ?></td>
				<td><?php echo $usuario ["email"]; ?></td>
				<td>
					<a href="novo-usuario.php?id=<?php echo $usuario['id']; ?>" class="btn btn-success">
						<i class="fas fa-edit"></i>
					</a>
					<a href="excluir-usuario.php?id=<?php echo $usuario["id"];?>" class="btn btn-danger" onclick="return confirm('Deseja excluir ?')" title="Excluir">
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