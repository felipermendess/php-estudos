<?php 
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

// inserindo com PDO - identificadores (:)
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD);");

// parâmetros do PDO
$login = "geovana";
$password = "211205";

//bind (para cada parâmetro) para juntar os parâmetros a query
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "AÇÃO INSERIR OK!";
?>