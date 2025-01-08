<?php 
//do while - executa ao menos uma vez mesmo a condição sendo falsa
$totalDaCompra = 100;
$desconto = 0.9; 
//fórmula do desconto = Valor Original − (Valor Original × (100 / Percentual de Desconto)​)
//$valorOriginal = 100;
//$percentualDesconto = 10; // Representa 10%
//$valorComDesconto = $valorOriginal - ($valorOriginal * $percentualDesconto / 100);

do{
    $totalDaCompra *= $desconto;
    //100 = 100 * 0.9 
}while($totalDaCompra > 100);

echo $totalDaCompra;
?>
