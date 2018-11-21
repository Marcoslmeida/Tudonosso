<?php
function Operacoes ($tipo,$num1,$num2){
	switch ($tipo) {
		case 'Soma':
			$resultado = $num1 + $num2;
			return $resultado;
			break;
		case 'Subtração':
			$resultado = $num1 - $num2;
			return $resultado;
			break;
		case 'Multiplicação':
			$resultado = $num1 * $num2;
			return $resultado;
			break;
		case 'Divisão':
			$resultado = $num1 / $num2;
			return $resultado;
			break;
		default:
			echo "Operacão não encontrada";
			break;
	}
}

echo Operacoes("Multiplicação",10,2) 
?>