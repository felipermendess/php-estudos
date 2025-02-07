<?php 
interface Vehicles {
    public function accelerate($speed);
    public function brake($speed);
}

abstract class Car implements Vehicles {
    public function accelerate($speed){
        echo "the car is travelling at " . $speed . " km/h per hour";
    }
    public function brake($speed){
        echo "the car braked at " . $speed . " km/h per hour";
    }
}

?>