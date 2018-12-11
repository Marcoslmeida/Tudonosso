<?php 
	require "include/connection.php";
	$sql_funcionario = "SELECT f.*, c.descricao as cargo
					 FROM funcionarios as f
					 LEFT JOIN  cargo as c ON c.id = f.id_cargo
					 ORDER BY f.id";
	$funcionarios = $conexao->query($sql_funcionario);
?>
<?php include "layout/header.php"; ?>
<?php include "layout/menu.php"; ?>
<div class="container">
	<p>&nbsp;</p>
	<h1>Funcionários</h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Funcionários</li>
			  </ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col">
		<?php include "layout/mensagem-get.php" ?>
		<a href="novo-funcionario.php" class="btn btn-dark mb-2">Novo Funcionário</a>
		</div>
	</div>
	<div class="row">
		<div class="col">
		<table class="table table-bordered table-striped table-hover table-dark">
			<tr>
				<th>#</th>
				<th>Cargo</th>
				<th>CPF</th>
				<th>Nome</th>
				<th>Matricula</th>
				<th>Data de Nascimento</th>
				<th>Telefone</th>
				<th>Email</th>
				<th>Data de Admissão</th>
				<th>Ações</th>

			</tr>
			<?php while($funcionario = $funcionarios->fetch_array(MYSQLI_ASSOC)){ ?>
				<tr>
					<td><?php echo $funcionario['id']; ?></td>
					<td><?php echo $funcionario['cargo']; ?></td>
					<td><?php echo $funcionario['cpf'] ?></td>
					<td><?php echo $funcionario['nome']; ?></td>
					<td><?php echo $funcionario['matricula'] ?></td>
					<td><?php echo $funcionario['dt_nascimento'] ?></td>
					<td><?php echo $funcionario['telefone'] ?></td>
					<td><?php echo $funcionario['email'] ?></td>
					<td><?php echo $funcionario['dt_admissao'] ?></td>
					<td>
					<a href="novo-funcionario.php?id=<?php echo $funcionario['id']; ?>" class="btn btn-success">
						<i class="fas fa-edit" width="50"></i>
					</a>
					<a href="excluir-funcionarios.php?id=<?php echo $funcionario["id"];?>" class="btn btn-danger" onclick="return confirm('Deseja excluir ?')" title="Excluir">
						<i class="fas fa-trash-alt" width="50"></i>
					</a>
				</td>
				</tr>

			<?php } ?>
		
		</table>
		</div>
	</div>
</div>

<?php include "layout/footer.php"; ?>

