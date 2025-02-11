<?php 
// conectando php ao banco de dados - mysqli (é uma extensão do PHP usada para interagir com bancos de dados MySQL)
$conn = new mysqli("localhost","root","","dbphp7");

// verificando conexão - connect_error (é uma propriedade do objeto mysqli que armazena a mensagem de erro caso a conexão com o banco de dados falhe)
if($conn->connect_error){
    echo "Erro de conexão: ".$conn->connect_error;
}

// fazendo select - query (executa consultas SQL no banco de dados. Ele é usado para consultas que não precisam de parâmetros (diferente de prepare())
$result = $conn->query("SELECT * FROM tb_usuarios");

//criando array 
$data = [];

//acessando dados dentro da variável 
//fetch_array(MYSQLI_ASSOC) (retorna uma linha do banco de dados como um array, permitindo acessar os dados tanto por índices numéricos quanto por nomes de colunas) Array Associativo e Numérico ($row[0] e $row["nome"])
//fetch_assoc() (retorna a linha como um array associativo, tornando o código mais legível) Somente Array Associativo ($row["nome"])
while ($row = $result->fetch_assoc()) {
    array_push($data, $row);
}

//transformando dados do banco retornados em array em formato JSON
echo json_encode($data);

//Tanto fetch_array(MYSQLI_ASSOC) quanto fetch_assoc() são usados para buscar resultados de uma consulta no MySQL usando a extensão MySQLi no PHP. Elas servem para percorrer 
//os resultados de uma query e transformar cada linha em um array associativo ou numérico.
//No entanto, há uma pequena diferença entre eles:
//fetch_array(MYSQLI_ASSOC) retorna um array associativo, ou seja, os índices do array são os nomes das colunas do banco de dados.
//fetch_assoc() retorna somente um array associativo. É equivalente a fetch_array(MYSQLI_ASSOC), mas com uma sintaxe mais curta e clara.
?>