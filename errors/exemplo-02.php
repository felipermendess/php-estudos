<?php 
//error_reporting - faz o controle do que o php pode mostrar (erros)

// Ele define quais tipos de erros, avisos e notificações serão exibidos
// ou registrados durante a execução do script.
error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["nome"];
echo $nome;
?>