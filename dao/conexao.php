<?php 
/*O DAO é um padrão de projeto (design pattern) usado para separar a lógica de acesso a dados 
(como consultas ao banco de dados) do restante da aplicação. Ele encapsula todas as operações 
de banco de dados (inserir, atualizar, deletar, consultar) em uma classe, tornando o código mais
organizado, modular e fácil de manter.*/
require_once("User.php");
require_once("UserDAO.php");

// configuração da conexão PDO
$conn = new PDO("mysql:dbname=production;host=localhost", "root", "");

// instanciando o DAO
$userDAO = new UserDAO($conn);

// criando um novo usuário
$felipe = new User();
$felipe->setDesname("Felipe");
$felipe->setEmail("felipe123@gmail.com");

// inserindo no banco de dados
$userDAO->insert($felipe);

// buscando todos os usuários
$users = $userDAO->findAll();
echo json_encode($users);
echo "<br>";

// buscando um usuário pelo id
$user = $userDAO->findById(1);
echo json_encode($user);
echo "<br>";

// atualizando um usuário
$felipe->setEmail("felipe04@outlook.com.br");
$felipe->setDesname("filipe");
$userDAO->update($felipe);

// deletando um usuário
$userDAO->delete(1);


?>