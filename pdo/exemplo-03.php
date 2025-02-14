<?php 
$connection = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

// alterando com PDO - identificadores (:)
$stmt = $connection->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "user";
$password = "456";
$id = "2";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "AÇÃO DE ALTERAR OK!";
?>