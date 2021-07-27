<?php

## First statement
echo "Hello World";

## Variable
$number = 4;

function printNumber() {
    global $number;
    echo "\nNumber is $number";
    echo "\nNumber is " . $GLOBALS['number'];
}

printNumber();

## PHP Static Variables

function increment(): int {
    static $number = 0;
    $number++;
    return $number;
}

echo "\nFirst call output = " . increment();
echo "\nSecond call output = " . increment();

## Echo Statement
echo "\n" , "This ", "string ", "was ", "made ", "with ", "multiple ", "parameters.";

## Print statement
print "<h2>Php is Fun!</h2>";

## PHP String
$x = "Hello world";
echo "\n$x";

## PHP Integer
$x = 5588;
print "\n";
var_dump($x);

## PHP Array
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);

