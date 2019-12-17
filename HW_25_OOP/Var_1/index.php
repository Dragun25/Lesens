<?php
include 'Obshee.php';
include 'Transport.php';
include 'Motorcycle.php';
include 'Quad.php';
include 'Scooter.php';
$motorcycle = new Motorcycle('Harley', 'blacke', 1970, '50');
$scooter = new Scooter('Honda Dio', 'White', 2007, '49.9');
$quad = new Quad('Spark SP', 'Green', 2015, '110');


echo $motorcycle->info() . $motorcycle->info_class();
echo $quad->info() . $quad->info_class();
echo $scooter->info() . $scooter->info_class();