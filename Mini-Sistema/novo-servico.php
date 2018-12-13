<?php 
	include "layout/header.php"; 
	include "layout/menu.php";
	require "include/connection.php";

	$title = "Novo Serviço";
	if(isset($_GET['id']) && $_GET['id'] != '') {
		$id = $_GET['id'];
		$sql_servico = "SELECT * FROM servicos WHERE id = {$id};";
		$servico = $conexao->query($sql_servico);
		$dados_servico = $servico->fetch_assoc();
		$title = "Editar Serviço";
	}
	$sql_funcionario = "SELECT * FROM funcionarios";
	$funcionarios = $conexao->query($sql_funcionario);

	$sql_categoria = "SELECT * FROM categoria
					  ";
	$categorias = $conexao->query($sql_categoria);
?>
<div class="container">
	<p>&nbsp;</p>
	<h1><?php echo $title ?></h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item active" aria-current="page"><a href="funcionarios.php">Serviços</a></li>
			    <li class="breadcrumb-item active" aria-current="page"><?php echo $title ?></li>
			  </ol>
			</nav>
		</div>
	</div>
	<form method="post" action="salva-servico.php">
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label for="id_funcionario">Nome:</label>
						
						<select name="id_funcionario" class="form-control" required value="<?php echo (isset($dados_servico) ? $dados_servico['id_funcionario'] : '')?>">
							<option value="">Escolha o Funcionário</option>
							<?php while($mercadoria = $funcionarios->fetch_array(MYSQLI_ASSOC)) { ?>
								<option value="<?php echo $mercadoria['id'] ?>"
										
										<?php 
										if (isset($dados_servico) && $dados_servico['id_funcionario'] == $mercadoria['id'])  {echo 'selected="selected"'; } ?>

										>
										<?php echo $mercadoria['nome'] ?> 
								</option>
							<?php } ?>

						</select>
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="id_categoria">Tipo:</label>
						
						<select name="id_categoria" class="form-control" required value="<?php echo (isset($dados_servico) ? $dados_servico['id_categoria'] : '')?>">
							<option value="">Escolha o tipo de serviço</option>
							<?php while($mercadoria = $categorias->fetch_array(MYSQLI_ASSOC)) { ?>
								<option value="<?php echo $mercadoria['id'] ?>"
										
										<?php 
										if (isset($dados_servico) && $dados_servico['id_categoria'] == $mercadoria['id'])  {echo 'selected="selected"'; } ?>

										>
										<?php echo $mercadoria['descricao'] ?> 
								</option>
							<?php } ?>

						</select>
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="descricao">Descriçao:</label>
						<input type="text" name="descricao" id="descricao" class="form-control" required value="<?php echo (isset($dados_servico) ? $dados_servico['descricao'] : '')?>">
						<input type="hidden" name="id" value="<?php echo (isset($dados_servico) ? $dados_servico['id'] : ''); ?>">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="valor">Valor:</label>
						<input type="text" name="valor" id="valor" class="form-control" required value="<?php echo (isset($dados_servico) ? $dados_servico['valor'] : '')?>">
						<input type="hidden" name="id" value="<?php echo (isset($dados_servico) ? $dados_servico['id'] : ''); ?>">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="dt_inicio">Data de Início:</label>
						<input type="date" name="dt_inicio" id="dt_inicio" class="form-control" required value="<?php echo (isset($dados_servico) ? $dados_servico['dt_inicio'] : '')?>">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="dt_fim">Data do Fim:</label>
						<input type="date" name="dt_fim" id="dt_fim" class="form-control" required value="<?php echo (isset($dados_servico) ? $dados_servico['dt_fim'] : '')?>">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="status">Status:</label>
						<input type="text" name="status" id="status" class="form-control" required value="<?php echo (isset($dados_servico) ? $dados_servico['status'] : '')?>">
					</div>
				</div>
			<button type="submit" class="btn btn-dark float-right">Salvar</button>
</form>		
</div>
<?php include "layout/footer.php"; ?>