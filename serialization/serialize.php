<?php

class Car {
public $name;
public $color;
public $price;

public function __construct(){
	echo "Constructed function runned successfully";
	echo "\n";
}

public function __destruct(){
	echo "Destruct Done";
	echo "\n";
}

public function print_var(){
	echo "The name of the car is " . $this->name . ", the color is " . $this->color . ", and the price is " . $this->price;
}

}

$car_obj = new Car();
$car_obj->name = "BMW";
$car_obj->color = "RED";
$car_obj->price = "500";

$serialized_car = serialize($car_obj);
echo "Serialized data: " . $serialized_car;
echo "\n";

$unserialized_car = unserialize($serialized_car);
echo "Unserialized data: ";
$unserialized_car->print_var();

?>
