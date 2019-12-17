<?php
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