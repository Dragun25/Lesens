<?php

abstract class Transport
{
    public function carriage()
    {
        echo 'My lover railway carriage is - ';
    }
}

class VagonSV extends Transport
{
    public function carriage()
    {
        echo parent::carriage() . 'AAAA, aaa, aaaaapchhi' . PHP_EOL;
    }
}

class VagonPlackart extends Transport
{
    public function carriage()
    {
        echo parent::carriage() . 'Nu sho vono vonaye' . PHP_EOL;
    }
}

class CargoVagon extends Transport
{
    public function carriage()
    {
        echo parent::carriage() . 'budem vorovat coal' . PHP_EOL;
    }
}
$sv = new VagonPlackart();
$plack = new VagonSV();
$cargo = new CargoVagon();

echo $sv->carriage();
echo $plack->carriage();
echo $cargo->carriage();