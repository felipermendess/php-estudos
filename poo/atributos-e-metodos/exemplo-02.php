<?php 
//atributos e métodos
class Car{
    private $model;
    private $motor;
    private $year;

    //getters and setters
    function getModel(){
        return $this->model;
    }

    function setModel($model){
        $this->model = $model;
    }

    function getMotor():float{
        return $this->motor;
    }

    function setMotor($motor){
        $this->motor = $motor;
    }

    function getYear():int{
        return $this->year;
    }

    function setYear($year){
        $this->year = $year;
    }

    function showCar(){
        return "Model: ".$this->getModel()." | Motor: ".$this->getMotor()." | Year: ".$this->getYear();
    }
}

$gol = new Car();
$gol->setModel("Gol G7");
$gol->setMotor("1.0");model: 
$gol->setYear("2018");
echo $gol->showCar();


?>