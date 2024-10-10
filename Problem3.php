<?php
class Vehicle {
    public $name;
    public $speed;
    public $mileage;
    
    public function __construct($name, $speed, $mileage) {
        $this->name = $name;
        $this->speed = $speed;
        $this->mileage = $mileage;
    }
    public function get_name () { 
        return $this->name;
    }
    public function get_speed () {
        return $this->speed;
    }
    public function get_mileage () {
        return $this->mileage;
    }
}
class Bus extends Vehicle{
}

$bus = new Bus("Victory",50,60);
echo "The bus name is " . $bus->get_name(). " and its speed is " . $bus->get_speed() . " and its mileage is " . $bus->get_mileage ();
?>
