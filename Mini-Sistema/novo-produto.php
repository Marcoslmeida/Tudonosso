<?php 
	include "layout/header.php"; 
	include "layout/menu.php";
	require "include/connection.php";

	if(isset($_GET['id']) && $_GET['id'] != '') {
		$id = $_GET['id'];
		$sql_product = "SELECT * FROM produto WHERE id = {$id};";
		$produto = $conexao->query($sql_product);
		$dados_product = $produto->fetch_assoc();

	}
	$sql_categorias = "SELECT * FROM categoria";
	$categorias = $conexao->query($sql_categorias);
?>
<div class="container">
	<p>&nbsp;</p>
	<h1>Novo Produto</h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item active" aria-current="page"><a href="produtos.php">Produtos</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Novo Produto</li>
			  </ol>
			</nav>
		</div>
	</div>
<form method="post" action="salva-produto.php">
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label for="nome">Nome:</label>
						<input type="text" name="nome" id="nome" class="form-control" required value="<?php echo (isset($dados_product) ? $dados_product['nome'] : '')?>">
					</div>
				</div>

				<div class="col-6">
					<div class="form-group">
						<label for="valor">Valor (R$):</label>
						<input type="text" name="valor" id="valor" class="form-control price" required value="<?php echo (isset($dados_product) ? $dados_product['valor'] : '')?>">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="estoque">Estoque:</label>
						<input type="number" name="estoque" id="estoque" class="form-control" required value="<?php echo (isset($dados_product) ? $dados_product['estoque'] : '')?>">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="id_categoria">Categoria:</label>
						
						<select name="id_categoria" class="form-control" required value="<?php echo (isset($dados_product) ? $dados_product['id_categoria'] : '')?>">
							<option value="">Escolha a categoria</option>
							<?php while($mercadoria = $categorias->fetch_array(MYSQLI_ASSOC)) { ?>
								<option value="<?php echo $mercadoria['id'] ?>"
										
										<?php 
										if (isset($dados_product) && $dados_product['id_categoria'] == $mercadoria['id'])  {echo 'selected="selected"'; } ?>

										>
										<?php echo $mercadoria['descricao'] ?> 
								</option>
							<?php } ?>

						</select>

					</div>
					<button type="submit" class="btn btn-primary float-right">Salvar</button>
				</div>
			</div>
		</form>

</div>
<?php include "layout/footer.php"; ?>