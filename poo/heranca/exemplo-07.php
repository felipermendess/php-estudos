<?php 
//herança - permite que uma classe herde atributos e métodos de outra. Isso evita repetição de código e melhora a organização do sistema. 
//Em PHP, a herança é feita com a palavra-chave extends. A classe que herda é chamada de classe filha, e a classe original é chamada de classe pai.
class Vehicle {
    private $whells;

    public function getWhells(){
        return $this->whells;
    }
    
    public function setWhells($whells){
        $this->whells = $whells;
    }
}

class Car extends Vehicle{
    public function validate(): bool{
        $carWhells = $this->getWhells();
        //validate
        return true;
    }
}

$myCar = new Car();
$myCar->setWhells("4");
var_dump($myCar->validate());
echo "<br>";
echo $myCar->getWhells();

//apenas a classe filha acessa informações da classe pai e não o contrário
?>