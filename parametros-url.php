<?php
//Paremtro 1
if (isset($_GET['nome'])) {
	$parametro = $_GET['nome'];
} else {
	$parametro = '';
}
//Parametro 2
$parametro2 = $_GET['sobrenome'] ?? '';

echo ucfirst($parametro).' '.strtoupper($parametro2);
?>