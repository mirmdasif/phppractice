<?php
class Car {
    public $color;
    public $model;

    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    public function printCarDetails() {
        echo "\nMy car is a " . $this->model . " " . "color " . $this->color;
    }
}

$myCar = new Car("black", "Mercedes");

$myCar->printCarDetails();

## Null value

$x = null;
 var_dump($x);