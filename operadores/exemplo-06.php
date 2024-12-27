<?php 
//Operador Null Coalescente
$a = NULL;
$b = 8;
$c = 10;

//Mostra o primeiro valor não nulo
echo $a ?? $b ?? $c;
?>