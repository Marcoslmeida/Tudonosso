<?php

$x = 35;

$y = 39;

$z = $x + $y;

echo $y;
echo " <br>======================================================<br>";
$b = 99;
$c = 151;

function somaNum($num1, $num2){
	$a = $num1 + $num2;
	/*echo $a;*/
	return $a;
}
echo somaNum($b, $c);
?>