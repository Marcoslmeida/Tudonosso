<?php 
	require "include/connection.php";
	$sql_servico = "SELECT s.*, c.tipo as tipo, f.nome as nome
					 FROM servicos as s
					 LEFT JOIN  categoria as c ON c.id = s.id_categoria
					 LEFT JOIN funcionarios as f ON f.id = s.id_funcionario
					 ORDER BY s.id";
	$servicos = $conexao->query($sql_servico);
?>
<?php include "layout/header.php"; ?>
<?php include "layout/menu.php"; ?>
<div class="container">
	<p>&nbsp;</p>
	<h1>Serviços</h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Serviços</li>
			  </ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col">
		<?php include "layout/mensagem-get.php" ?>
		<a href="novo-servico.php" class="btn btn-dark mb-2">Novo Serviço</a>
		</div>
	</div>
	<div class="row">
		<div class="col">
		<table class="table table-bordered table-striped table-hover table-dark">
			<tr>
				<th>#</th>
				<th>Nome Funcionário</th>
				<th>Tipo de Serviço</th>
				<th>Descrição</th>
				<th>Valor</th>
				<th>Data de Início</th>
				<th>Data de Fim</th>
				<th>Status</th>
				<th>Ações</th>

			</tr>
			<?php while($servico = $servicos->fetch_array(MYSQLI_ASSOC)){ ?>
				<tr>
					<td><?php echo $servico['id']; ?></td>
					<td><?php echo $servico['nome']; ?></td>
					<td><?php echo $servico['tipo']; ?></td>
					<td><?php echo $servico['descricao']; ?></td>
					<td>R$ <?php echo number_format($servico['valor'], 2, ',','.'); ?></td>
					<td><?php echo date('d/m/y', strtotime($servico['dt_inicio'])); ?></td>
					<td><?php echo date('d/m/y', strtotime($servico['dt_fim'])); ?></td>
					<td><?php echo $servico['status']; ?></td>
					<td>
					<a href="novo-servico.php?id=<?php echo $servico['id']; ?>" class="btn btn-success">
						<i class="fas fa-edit" width="50"></i>
					</a>
					<a href="excluir-servico.php?id=<?php echo $servico["id"];?>" class="btn btn-danger" onclick="return confirm('Deseja excluir ?')" title="Excluir">
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

