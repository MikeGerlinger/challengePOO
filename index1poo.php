<?php

require_once('Challenge1poo.php');

echo "Krusty's porsche". "<br>";
$simpsonsCar = new SimpsonsCar('red', 2, 'electric');

echo $simpsonsCar->forward();

echo '<br> Vitesse de la voiture : ' . $simpsonsCar->getCurrentSpeed() . 'km/h' . '<br>';
 
echo $simpsonsCar->brake();

?>