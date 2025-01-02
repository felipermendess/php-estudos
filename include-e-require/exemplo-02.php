<?php 
// include "exemplo-01.php";
require "exemplo-01.php";
require_once "exemplo-01.php"; //Vai incluir somente uma vez o arquivo com o require_once
$resultado = somar(10,25);
echo $resultado;

//O require exige que o arquivo exista e estaja funcionando. O include não faz essa exigência e usa o include_path para procurar por aquivos que não encontrar
//Include Path - é um diretório configurado no php.ini que será consultado se um include não encontrar o arquivo nele especificado
//include_once X require_once: Incluem somente uma vez o arquivo selecionado. Caso um arquivo seja chamado diretamente e indiretamente no mesmo 
//script, ele mantém somente uma inclusão.
?>