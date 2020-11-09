<?php

require "LightableInterface.php";
require "Car.php";
require "Bike.php";
require "Skateboard.php";


$prout = new Car();
echo $prout->switchOn();
echo '<br>';
$gnyah = new Bike();
$gnyah->setCurrentSpeed(12);
echo $gnyah->switchOn();