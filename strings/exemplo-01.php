<?php 
//Aspas simples e aspas dlupas
$nome = 'Felipe';
$nome2 = "Gustavo";

var_dump($nome, $nome2);
echo '<br>';

//Interpolação de variáveis - apenas com aspas duplas
echo "O nome do meu irmão é $nome2";
echo '<br>';

//Com aspas simples não funciona
echo 'Meu nome é $nome';
?>