<?php 
function sumValues(int ...$values):string{
    return array_sum($values);
}

var_dump(sumValues(12, 2));
echo "<br>";

//Tipo de retorno:casting - É possível definir o tipo de retorno para uma função, 
//realizando um casting na definição da mesma
?>