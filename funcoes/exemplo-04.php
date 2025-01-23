<?php 
//parâmetros e func get args
function sayHello(){
    $arguments = func_get_args();
    return $arguments;
}
var_dump(sayHello("Good Morning", "Good Afternoon", "Good Evening"));

//func_get_args é usada para recuperar os argumentos passados para uma função como um array. Retorna um array contendo a quantidade de 
//argumentos e seus conteúdos.
?>