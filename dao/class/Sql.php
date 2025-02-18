<?php 
// extendendo classe PDO para executar tudo o que ela faz
class Sql extends PDO{
    private $conn;

    // conexão com banco de dados assim que o objeto for instanciado
    public function __construct(){
        $this->conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
    }

    public function setParams($statement, $parameters = []){
        foreach($parameters as $key => $value){
            $this->setParam($statement, $key, $value);
        }
    }

    public function setParam($statement, $key, $value){
        $statement->bindParam($key, $value);
    }

    // executando comando - prepare, bind, execute, fetchAll
    public function querie($rawQuery, $params = []){
        $statement = $this->conn->prepare($rawQuery);

        $this->setParams($statement, $params);

        $statement->execute();

        return $statement;
    }

    public function select($rawQuery, $params = []): array{
        $statement = $this->querie($rawQuery, $params);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>