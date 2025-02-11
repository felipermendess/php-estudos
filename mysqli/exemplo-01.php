<?php 
// forma alternativa
// $host = "localhost";
// $login = "root";
// $pass = "";
// $dbname = "dbphp7";

// conectando php ao banco de dados - mysqli (é uma extensão do PHP usada para interagir com bancos de dados MySQL)
$conn = new mysqli("localhost","root","","dbphp7");

// verificando conexão - connect_error (é uma propriedade do objeto mysqli que armazena a mensagem de erro caso a conexão com o banco de dados falhe)
if($conn->connect_error){
    echo "Erro de conexão: ".$conn->connect_error;
}

// fazendo insert - prepare (prepara a consulta SQL)
//bind_param (associa valores aos parâmetros da consulta)
//execute (executa a consulta no banco de dados)
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

//os outros dois parâmetros tem que ser por referência: login e pass
$stmt->bind_param("ss", $login, $pass);

$login = "root";
$pass = "123";
$stmt->execute();

$login = "joao";
$pass = "321";
$stmt->execute();

?>