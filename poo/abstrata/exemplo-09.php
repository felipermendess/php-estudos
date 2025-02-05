<?php 
//classe abstrata - Uma classe abstrata em PHP é uma classe que não pode ser instanciada diretamente. 
//Ela serve como um modelo para outras classes e pode conter métodos com ou sem implementação.
//é como uma classe comum, porém não pode ser instanciada por um objeto. Para utilizar os métodos 
//e atributos de uma classe abstrata, é necessário antes que uma classe comum estenda ela.

interface BirdInterface {
    public function fly($bird);
    public function birdSounds($bird);
}

abstract class Bird implements BirdInterface {
    public function fly($bird){
        echo "the bird " . $bird . " flew away";
    }
    public function birdSounds($bird){
        echo "the bird " . $bird . " made a noise";
    }
}

class Parrot extends Bird {
    public function helloParrot(){
        echo "the parrot say hello";
    }
}

$blonde = new Parrot();
$blonde->helloParrot();
echo "<br>";
$blonde->birdSounds("blonde");
echo "<br>";
$blonde->fly("blonde");
?>