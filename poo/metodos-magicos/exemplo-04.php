<?php 
//Os métodos mágicos tornam as classes mais dinâmicas e flexíveis
class Address{
    private $street;
    private $number;
    private $city;

	//Chamado automaticamente quando um objeto é instanciado.
    public function __construct($street, $number, $city){
        $this->street = $street;
        $this->number = $number;
        $this->city = $city;
    }

    //Chamado quando um objeto é destruído ou o script termina.
    public function __destruct(){
        var_dump("DESTRUCT!!!");
    }

    //Chamado automaticamente quando tentamos imprimir um objeto.
    public function __tostring(){
        return $this->street.", ".$this->number.", ".$this->city;
    }
}

$myAddress = new Address("Avenida 7 de Setembro", "6789", "Montinhos");
var_dump($myAddress);
echo "<br>";
echo "Address: ".$myAddress;
echo "<br>";
unset($myAddress);

?>