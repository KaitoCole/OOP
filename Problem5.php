<?php

class Vehicle{ 
    public $name;
    public $speed;
    public $mileage;
    public $fuel = "Gasoline";
    
    public function __construct($name, $speed, $mileage) {
        $this->name = $name;
        $this->speed = $speed;
        $this->mileage = $mileage;
   
   }
}
class Bus extends Vehicle{
}
class Car extends Vehicle{
}

$vehicle = new Vehicle("BMW", 50, 95);
$bus = new Bus("Victory", 30, 60);
$car = new Car("Toyoda", 60, 100);


echo "Vehicle fuel: ". $vehicle->fuel. "<br>";
echo "Bus fuel: ". $bus->fuel. "<br>";

echo "Car fuel: ". $car->fuel. "<br>";

?>
