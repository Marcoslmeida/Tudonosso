<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>
		<?php
			/*array é um conjunto de valores*/
			$cor = []; /*Declaração de vetor */
			$cor[1] = 'Laranjado'; /*Valor declarado no vetor*/
			$cor[2] = 'Verde'; /*Valor declarado no vetor*/
			$cor[3] = 'Vermelho'; /*Valor declarado no vetor*/
		 ?>
	</h1>
	<p><?php var_dump($cor); ?></p> <!-- Detalhamento do array/vetor --> 
	<p><?php print_r($cor); ?></p> <!-- Detalhamento do Array/vetor com menos detalhes  -->
	<p><?php echo $cor[2]; ?></p> <!-- Mostra o Valor específico detalhado no array/vetor -->

</body>
</html>