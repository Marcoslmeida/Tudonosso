<?php 
$nome = $_POST['nome'];
$senha = $_POST['senha'];

/*switch ($senha) { */
	/*case 1234;
	echo "Seja muito bem vindo senhor ".strtoupper($nome);
	break;
	default;
	echo "Erro";
	break;
*/
/*}*/
 if ($senha != 1234) {
 	header('Location: exercicio2.php?msg=erro');
 }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="contaner">
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<div class="row">
		<div class="col"></div>
		<div class="col">
			<div class="card">
				<div class="card-body">
					<h3 class="text-center">Bem Vindo <?php  echo "Seja muito bem vindo senhor ".strtoupper($nome);?></h3>
				</div>
			</div>
		</div>
		<div class="col"></div>
	</div>

</div>


<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>