<?php 
function sumValues(int ...$values){
    return array_sum($values);
}

echo sumValues(2, 10);
echo "<br>";
echo sumValues(24, 11);
echo "<br>";
echo sumValues(7.8, 11.2);
echo "<br>";
//array_sum - é usada para calcular a soma dos valores de um array
?>