<?php 
//**strpos($variável, “palavra”)** - retorna a posição da palavra indicada como parâmetro.
$frase = 'Doente de amor procurei remédio na vida noturna.';
echo strpos($frase, 'amor');
echo '<br>';

//**substr($varBase, início, fim)** - retorna uma string conforme os argumentos passados.
//**strlen()** - retorna a quantidade de caracteres da string passada como argumento
$frase2 = 'Sair de que jeito, se nem sei para aonde estou indo.';
echo substr($frase2, 6, strlen($frase2));
echo '<br>';
?>