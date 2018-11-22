<?php
function Operacoes ($tipo,$num1,$num2){
	switch ($tipo) {
		case 'Soma':
			$resultado = $num1 + $num2;
			return "A $tipo entre $num1 e $num2 é igual a ".$resultado;
			break;
		case 'Subtração':
			$resultado = $num1 - $num2;
			return "A $tipo entre $num1 e $num2 é igual a ".$resultado;
			break;
		case 'Multiplicação':
			$resultado = $num1 * $num2;
			return "A $tipo entre $num1 e $num2 é igual a ".$resultado;
			break;
		case 'Divisão':
			$resultado = $num1 / $num2;
			return "A $tipo entre $num1 e $num2 é igual a ".$resultado;
			break;
		default:
			echo "Operacão não encontrada";
			break;
	}
}
$tipo = $_GET['tipo'] ?? 'Soma';
$num1 = $_GET['num1'] ?? 0;
$num2 = $_GET['num2'] ?? 0;

echo Operacoes($tipo,$num1,$num2);
?>