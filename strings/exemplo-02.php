<?php 
//Funções de string:
//**strlen()** - retorna a quantidade de caracteres da string passada como argumento
//**strtoupper()** - retorna a string em maiúsculo
//**strtolower()** - retorna a string como minúsculo
//**ucwords()** - primeira letra de cada palavra da string fica em maiúsculo
//**ucfirst()** - primeira letra da primeira palavra de uma string em maiúsculo
//**str_replace()** - realiza a troca de um dado pelo outro. Recebe 3 parâmetros, sendo: (valor existente na string, valor novo, $variável)
//**str_pos($variável, “palavra”)** - retorna a posição da palavra indicada como parâmetro.
//**substr($varBase, início, fim)** - retorna uma string conforme os argumentos passados.
//**unset($variável)** - remove a variável da memória
//**isset($variável)** - verifica se a variável está definida e devolve true ou false

//-------EXEMPLOS------------
//**strtoupper()** - retorna a string em maiúsculo
$nome = 'davi';
echo strtoupper($nome);
echo '<br>';

//**strtolower()** - retorna a string como minúsculo
$nome2 = 'RODRIGO';
echo strtolower($nome2);
echo '<br>';

//**ucwords()** - primeira letra de cada palavra da string fica em maiúsculo
$nome3 = 'elisângela valente';
echo ucwords($nome3);
echo '<br>';

//**ucfirst()** - primeira letra da primeira palavra de uma string em maiúsculo
$nome4 = 'geovana paiva';
echo ucfirst($nome4);
echo '<br>';
?>