<?php 
// A classe DAO será responsável por todas as operações no banco de dados relacionadas à tabela users.
class UserDAO {
    private $connection;

    // construtor recebe a conexão PDO
    public function __construct($connection){
        $this->connection = $connection;
    }

    // método para inserir um usuário
    public function insert($user){
        $sql = "INSERT INTO users (desname, email) VALUES(:DESNAME, :EMAIL)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(":DESNAME", $user->getDesname());
        $stmt->bindValue(":EMAIL", $user->getEmail());
        $stmt->execute();
    }

    // método para buscar todos os usuários
    public function findAll(){
        $sql = "SELECT * FROM users";
        $stmt = $this->connection->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // método para buscar um usuário pelo ID
    public function findById($id){
        $sql = "SELECT * FROM users WHERE id = :ID";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(":ID", $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // método para atualizar um usuário
    public function update($user){
        $sql = "UPDATE users SET desname = :DESNAME, email = :EMAIL WHERE id = :ID";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(":DESNAME", $user->getDesname());
        $stmt->bindValue(":EMAIL", $user->getEmail());
        $stmt->bindValue(":ID", $user->getId());
        $stmt->execute();
    }

    // método para deletar um usuário
    public function delete($id){
        $sql = "DELETE FROM users WHERE id = :ID";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(":ID", $id);
        $stmt->execute();
    }
}

?>