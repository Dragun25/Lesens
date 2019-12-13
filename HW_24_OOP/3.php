<?php


interface Obshee
{
    public function info();
}


abstract class Transport implements Obshee
{
    public $name;
    public $color;
    public $year;
    public $engineVolume;

    public function __construct($name, $color, $year, $engineVolume)
    {
        $this->name = $name;
        $this->color = $color;
        $this->year = $year;
        $this->engineVolume = $engineVolume;
    }
}

class Motorcycle extends Transport
{
    public function info()
    {
        echo 'New motorcycle added.' . PHP_EOL;
    }

    public function info_class()
    {
        return 'It is ' . $this->name . ' engine ' . $this->engineVolume . ' cm3, year ' . $this->year . ', color is - '
            . $this->color . PHP_EOL;
    }

}

class Scooter extends Motorcycle
{
    public function info()
    {
        echo 'New scooter added.' . PHP_EOL;
    }
}

class Quad extends Motorcycle
{
    public function info()
    {
        echo 'New quad added.' . PHP_EOL;
    }
}
$motorcycle = new Motorcycle('Harley', 'blacke', 1970, '50');
$scooter = new Scooter('Honda Dio', 'White', 2007, '49.9');
$quad = new Quad('Spark SP', 'Green', 2015, '110');


echo $motorcycle->info() . $motorcycle->info_class();
echo $quad->info() . $quad->info_class();
echo $scooter->info() . $scooter->info_class();
