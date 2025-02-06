<?php 
//polimorfismo - É a capacidade de um método ou atributo contidos em uma classe pai se comportarem diferentemente 
//quando chamados numa classe filha. Por exemplo, uma classe Animal que é estendida por uma classe Gato pode chamar 
//novamente um método “andar” e atribuir um comportamento diferente para o mesmo.

abstract class Animal {
    public function talk(){
        echo "sound";
    }

    public function moviment(){
        echo "walk";
    }
}

class Dog extends Animal {
    //polimorfismo - mesmo método porém com comportamento diferente da classe pai
    public function talk(){
        echo "AUAHUAHUAHUAH";
    }
}

class Cat extends Animal {
    //polimorfismo - mesmo método porém com comportamento diferente da classe pai
    public function talk(){
        echo "miau";
    }

    public function moviment(){
        echo parent::moviment() . " in small steps";
    }
}

$goldenRetriever = new Dog();
$goldenRetriever->talk();
echo "<br>";
$goldenRetriever->moviment();
echo "<br>";
echo "-----------------------";
echo "<br>";
$catarina = new Cat();
$catarina->talk();
echo "<br>";
$catarina->moviment();

//parent:: é usado para chamar um método ou construtor da classe pai dentro de uma classe filha.
//Isso é útil quando queremos herdar funcionalidades da classe pai, mas também adicionar ou modificar algo na classe filha.
?>