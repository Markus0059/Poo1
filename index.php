<?php

require 'Bicycle.php';
require 'Car.php';
$bike = new Bicycle("blue");



$bike->setCurrentSpeed(0);

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle("yellow");


// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle("black");


echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

echo "</br>";
echo "</br>";

$car = new Car("red", 4, "essence");

$car->start();

echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();