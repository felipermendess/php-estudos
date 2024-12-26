<?php 
//Variáveis pré-definidas
//$_GET -> Contém os dados enviados via método GET na URL
//casting -> processo de converter explicitamente o tipo de uma variável para outro tipo 
//Toda informação que vier por GET ou POST sempre vai ser string
//Nota: em uma URL, o símbolo que define que a partir daquele ponto informaremos variáveis é o “?”: http://localhost/variaveis/exemplo-04.php?a=123
//Nota: em uma URL, o símbolo que define a continuação e definição de outra variável é o "&": http://localhost/variaveis/exemplo-04.php?a=123&b=456
$numero = (int)$_GET['numero'];
var_dump($numero);
echo '<br>' . $numero;

$numeroSecundario = (int)$_GET['numeroSecundario'];
var_dump($numeroSecundario);
echo '<br>' . $numeroSecundario;

//$_SERVER -> Contém informações sobre o servidor e o ambiente de execução
//Pegando ip do servidor do usuário
$ip = $_SERVER['REMOTE_ADDR'];
var_dump($ip);

//exibe o caminho relativo do script atual em execução no servidor, começando a partir da raiz do servidor web.
$path = $_SERVER['SCRIPT_NAME'];
var_dump($path);
?>