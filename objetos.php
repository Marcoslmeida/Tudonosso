<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>
		<?php
			class Carro {
				function acelerar() {
					echo "Vrum vrum vrum...";
				}
			}
		$uno = new Carro();
		$uno->nome = "Fiat Uno";
		$uno->acelerar();

		echo $uno->nome;
		 ?>
	</h1>

</body>
</html>