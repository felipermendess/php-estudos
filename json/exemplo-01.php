<?php 
//json
$profissionais = [];

array_push($profissionais, ["nome" => "alexandre", "idade" => 32], 
["nome" => "karol", "idade" => 27], 
["nome" => "ruan", "idade" => 19], 
["nome" => "felipe", "idade" => 20]);

// print_r($profissionais);
$json = json_encode($profissionais);
echo $json;

//Converter um array ou objeto PHP em JSON - Função: json_encode()
//Converter JSON em um array ou objeto PHP - Função: json_decode()
?>