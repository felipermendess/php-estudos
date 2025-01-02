<?php 
var_dump("ok");
// Include: Se o arquivo não for encontrado, o PHP gera um **aviso (warning)**, mas continua a execução do script.
// Require: Se o arquivo não for encontrado, o PHP gera um **erro fatal** e interrompe a execução do script.
function somar($a, $b){
    return $a + $b;
}

?>