<?php

require 'Bicycle.php';
require 'Car.php';
require 'Camion.php';
$bike = new Bicycle("blue", 1);



$bike->setCurrentSpeed(0);

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle("yellow", 1);


// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle("black", 1);


echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

echo "</br>";
echo "</br>";

$car = new Car("red", 4, "fuel");
var_dump(Car::ALLOWED_ENERGIES);


echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();

echo "</br>";
echo "</br>";

$camion = new Camion("white", 2, "fuel", 1200);
$camion->setNbWheels(8);
$camion->setCurrentSpeed(100);
$camion->setStorage(1000);
var_dump($camion);

echo "<br> the camion is " . $camion->filling();

$camion->setStorage(1200);

var_dump($camion);

echo "<br> the camion is " . $camion->filling();