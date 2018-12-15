<?php 
	include "layout/header.php"; 
	include "layout/menu.php"; 
?>
<div class="container">
	<p>&nbsp;</p>
	<h1>Nova Categoria</h1>
	<div class="row">
		 
		<div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Categorias</li>
			    <li class="breadcrumb-item active" aria-current="page">Nova Categoria</li>
			  </ol>
			</nav>
		</div>
	</div>
<div class="row">
	<div class="col">
		<form method="post" action="salvar-categoria.php">
			<div class="col-6 form-group">
				<label for="descricao">Descrição</label>
				<input type="text" name="descricao" id="descricao" class="form-control" required>
			</div>
			<div class="col-6 form-group">
				<label for="tipo">Tipo</label>
				<input type="text" name="tipo" id="tipo" class="form-control" required>
			</div>
			<button class="btn btn-success" type="submit">Salvar</button>
		</form>
	</div>
</div>
</div>
<?php include "layout/footer.php"; ?>