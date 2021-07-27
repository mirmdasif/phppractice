<?php

$cars = array("BMW", "Mercedes", "Audi");

foreach ($cars as $car) {
    print "I Love " .  $car;
    print(PHP_EOL);
}


## Loop over keys and values

$cars = array("BMW" => 2, "Mercedes" => 1, "Audi" => 3);

foreach ($cars as $car => $priority) {
    print "My priority of getting a " . $car . " is " . $priority;
    print(PHP_EOL);
}