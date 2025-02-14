<?php 
$connect = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $connect->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = "3";

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "AÇÃO DE DELETAR OK!"
?>