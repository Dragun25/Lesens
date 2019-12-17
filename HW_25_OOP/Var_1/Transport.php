<?php
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