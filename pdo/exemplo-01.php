<?php 
// PDO: (tipo de banco de dados:nome do banco=nome;host=local, usuário, senha)
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

// fazendo consulta - prepare
$stmt = $conn->prepare("SELECT * FROM tb_usuarios");

// mandando para a banco de dados - execute
$stmt->execute();

// pegando resultados - fetchAll(PDO::FETCH_ASSOC) (retorna todas as linhas de uma consulta SQL como um array de arrays associativos, onde 
//os nomes das colunas do banco se tornam as chaves do array.)
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// dois foreach porque são dois array - fetchAll (array de arrays associativos)
//key = nome da coluna
//value = valor digitado lá dentro
foreach($results as $row){
    foreach($row as $key => $value){
        echo $key.": ".$value."<br>";
    }
    echo "--------------------------<br>";
}

var_dump($results);
?>