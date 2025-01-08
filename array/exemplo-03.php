<?php 
$pessoas = [];
//A função array_push em PHP é usada para adicionar um ou mais elementos ao 
//final de um array e ela retorna o número total de elementos no array após a inserção.
//(alvo, valores)
array_push($pessoas, array(
    'nome' => 'Felipe',
    'idade' => 20
));
array_push($pessoas, array(
    'nome' => 'Gustavo',
    'idade' => 20
));
array_push($pessoas, 'Davi');

print_r($pessoas);
print_r($pessoas[0]['nome']);
print_r($pessoas[1]['nome']);
print_r($pessoas[2]);
?>