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
		<div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Usuários</li>
			  </ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<table class="table table-bordered table-striped table-hover ">
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
			</tr>
		<?php } ?>
		</table>
	</div>
</div>
<?php include "layout/footer.php"; ?>