<?php 
$connect = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

// iniciando transaction - beginTransaction()
$connect->beginTransaction();

$stmt = $connect->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = "4";

$stmt->bindParam(":ID", $id);

$stmt->execute();

//cancelando - rollback() ou confirmando - commit()
// $connect->rollBack();
$connect->commit();

echo "AÇÃO DE DELETAR OK!"

?>