<?php 
// **curl_init** - inicia uma sessão cURL
// **curl_exec** - executa uma sessão cURL
// **curl_close -** finaliza uma sessão cURL
// curl_setopt() para configurar

// cep e json viacep que irá ser consumido
$cep = "76824052";
$link = "https://viacep.com.br/ws/$cep/json/";

// inicia uma sessão cURL - preparando o ambiente para requisições com curl_init
$ch = curl_init($link);

// configs:
// CURLOPT_RETURNTRANSFER, 1: Retorna o resultado da requisição como uma string.
// CURLOPT_SSL_VERIFYPEER, 0: Desativa a verificação do certificado SSL do servidor.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

// executa a requisição e armazena o resultado em $response
$response = curl_exec($ch);

// fechando sessão curl
curl_close($ch);

// transformando resultado da requisição json em array
$data = json_decode($response, true);

print_r($data);
?>