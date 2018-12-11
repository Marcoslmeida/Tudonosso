<?php 
	include "layout/header.php"; 
	include "layout/menu.php";
	require "include/connection.php";

	$title = "Novo Funcionário";
	if(isset($_GET['id']) && $_GET['id'] != '') {
		$id = $_GET['id'];
		$sql_funcionario = "SELECT * FROM funcionarios WHERE id = {$id};";
		$funcionario = $conexao->query($sql_funcionario);
		$dados_funcionario = $funcionario->fetch_assoc();
		$title = "Editar Funcionário";
	}
	$sql_cargo = "SELECT * FROM cargo";
	$cargos = $conexao->query($sql_cargo);
?>
<div class="container">
	<p>&nbsp;</p>
	<h1><?php echo $title ?></h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item active" aria-current="page"><a href="funcionarios.php">Funcionários</a></li>
			    <li class="breadcrumb-item active" aria-current="page"><?php echo $title ?></li>
			  </ol>
			</nav>
		</div>
	</div>
	<form method="post" action="salva-funcionario.php">
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label for="id_cargo">Cargo:</label>
						
						<select name="id_cargo" class="form-control" required value="<?php echo (isset($dados_funcionario) ? $dados_funcionario['id_cargo'] : '')?>">
							<option value="">Escolha o cargo</option>
							<?php while($mercadoria = $cargos->fetch_array(MYSQLI_ASSOC)) { ?>
								<option value="<?php echo $mercadoria['id'] ?>"
										
										<?php 
										if (isset($dados_funcionario) && $dados_funcionario['id_cargo'] == $mercadoria['id'])  {echo 'selected="selected"'; } ?>

										>
										<?php echo $mercadoria['descricao'] ?> 
								</option>
							<?php } ?>

						</select>
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="cpf">CPF:</label>
						<input type="text" name="cpf" id="cpf" class="form-control" required value="<?php echo (isset($dados_funcionario) ? $dados_funcionario['cpf'] : '')?>">
						<input type="hidden" name="id" value="<?php echo (isset($dados_funcionario) ? $dados_funcionario['id'] : ''); ?>">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="nome">Nome:</label>
						<input type="text" name="nome" id="nome" class="form-control" required value="<?php echo (isset($dados_funcionario) ? $dados_funcionario['nome'] : '')?>">
						<input type="hidden" name="id" value="<?php echo (isset($dados_funcionario) ? $dados_funcionario['id'] : ''); ?>">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="matricula">Matrícula:</label>
						<input type="text" name="matricula" id="matricula" class="form-control" required value="<?php echo (isset($dados_funcionario) ? $dados_funcionario['matricula'] : '')?>">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="dt_nascimento">Data de Nascimento:</label>
						<input type="date" name="dt_nascimento" id="dt_nascimento" class="form-control" required value="<?php echo (isset($dados_funcionario) ? $dados_funcionario['dt_nascimento'] : '')?>">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="telefone">Telefone:</label>
						<input type="text" name="telefone" id="telefone" class="form-control" required value="<?php echo (isset($dados_funcionario) ? $dados_funcionario['telefone'] : '')?>">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="email">E-mail:</label>
						<input type="email" name="email" id="email" class="form-control" required value="<?php echo (isset($dados_funcionario) ? $dados_funcionario['email'] : '')?>">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="dt_admissao">Data de Admissão:</label>
						<input type="date" name="dt_admissao" id="dt_admissao" class="form-control" required value="<?php echo (isset($dados_funcionario) ? $dados_funcionario['dt_admissao'] : '')?>">
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-dark float-right">Salvar</button>
</form>		
</div>
<?php include "layout/footer.php"; ?>