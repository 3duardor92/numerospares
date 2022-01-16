<?php

// mostrar por pantalla los numeros pares menores que 100

$i = 0;     // contardor iniciara desde el numero 0
$n = 100;   // numero limite del ciclo
while ($i<=100){ //se puede usar sin variable n, que sirva de ejemplo para git

	if(($i%2)== 0){
    	echo $i.", ";
	}

	$i = $i+1;
}

?>