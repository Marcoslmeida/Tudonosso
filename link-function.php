<?php 
	$tipo = 'subtração';
	$num1 = rand(1, 11);
	$num2 = 654;

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Link de Função - <?php echo $tipo ?></title>
</head>
<body>
<h2>Link De Função passando Variável via GET</h2>

<p>
	<a href="exerciciofuncao.php?tipo=<?php echo $tipo ?>&num1=<?php echo $num1?>&num2=<?php echo $num2 ?>">Clique aqui para saber a <?php $tipo ?> entre <?php echo $num1 ?> e <?php echo $num2 ?></a>
</p>


</body>
</html>