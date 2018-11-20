<?php
$idade = 78;

/*if($idade >- 18) {
	echo 'A idade nº '.$idade.' é de maior';
} else{
	echo "A idade nº {$idade} é de maior";
}*/
if ($idade >= 60){
	echo "Vencido";
}else if($idade >- 18) {
	echo 'A idade nº '.$idade.' é de maior';
} else{
	echo "A idade nº {$idade} é de maior";
}
?>