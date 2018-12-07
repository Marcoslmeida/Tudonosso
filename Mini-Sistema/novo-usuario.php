<?php 
	include "layout/header.php"; 
	include "layout/menu.php";
	require "include/connection.php";

	$title = "Novo Usuário";
	if(isset($_GET['id']) && $_GET['id'] != '') {
		$id = $_GET['id'];
		$sql_usuario = "SELECT * FROM usuario WHERE id = {$id};";
		$usuario = $conexao->query($sql_usuario);
		$dados_usuario = $usuario->fetch_assoc();
		$title = "Editar Usuário";
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
<form method="post" action="salva-usuario.php">
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label for="nome">Nome:</label>
						<input type="text" name="nome" id="nome" class="form-control" required value="<?php echo (isset($dados_usuario) ? $dados_usuario['nome'] : '')?>">
						<input type="hidden" name="id" value="<?php echo (isset($dados_usuario) ? $dados_usuario['id'] : ''); ?>">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="e-mail">E-mail:</label>
						<input type="email" name="e-mail" id="e-mail" class="form-control" required value="<?php echo (isset($dados_usuario) ? $dados_usuario['email'] : '')?>">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="senha">Senha</label>
						<input type="password" name="senha" id="senha" class="form-control" <?php echo(isset($dados_usuario) ? '' : 'required') ?>
						>
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-dark float-right">Salvar</button>
</form>			
</div>
		

</div>
<?php include "layout/footer.php"; ?>