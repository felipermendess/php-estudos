<?php 
//class
class Dog{
    public $name;//Atributo

    public function bark(){//Método
        return "AUAUAUAU";
    }

    public function sleep(){//Método
        return "SHIII! ".$this->name." is sleeping";
    }
}

$goldenRetriever = new Dog();
$goldenRetriever->name = "Bob";
echo $goldenRetriever->bark();
echo "<br>";
echo $goldenRetriever->sleep();


//Convenção: toda nome de classe começa com letra maiúscula

//O `this` em PHP é uma palavra-chave usada dentro de uma classe para referenciar a instância atual do objeto. 
//Ele é necessário quando queremos acessar propriedades ou métodos da própria classe dentro dela.

//Atributo fora do método escreve ele normal com $, porém dentro do método precisa do $this→.
?>