<?php 
$json = '[{"nome":"alexandre","idade":32},{"nome":"karol","idade":27},{"nome":"ruan","idade":19},{"nome":"felipe","idade":20}]';
$array = json_decode($json, true);//true para retornar um array associativo
print_r($array);

//Converter um array ou objeto PHP em JSON - Função: json_encode()
//Converter JSON em um array ou objeto PHP - Função: json_decode()
?>