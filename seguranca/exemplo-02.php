<?php 
// ternário: caso o id seja definido via get atribui a variavel, caso não atribui o 3
$id = (isset($_GET["id"])) ? $_GET["id"] : 1;

// tratando SQL injection: verifica se é numérico ou se passa de mais de 5 dígitos
if (!is_numeric($id) || strlen($id) > 5){
    exit("Pegamos você!");
}

$conn = mysqli_connect("localhost", "root", "", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)){
    var_dump($resultado);
}

?>