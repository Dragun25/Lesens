<?php

class Pod_sostav
{
	public $osnost, $tonag, $dor_priv;

	function info()
	{
		return "Osnost vagona: " . $this->osnost . PHP_EOL . "Tonag: " . $this->tonag . PHP_EOL . "Doroga prepiski: " . $this->dor_priv . PHP_EOL;
	}
}

class Gruzovoy extends Pod_sostav
{
	protected $gruz;
	function info()
	{
		return parent::info() . 'Perevozimiy gruz: ' . $this->gruz . PHP_EOL;
	}
}

class Sobstv extends Gruzovoy {
    public $sobstv;
    function getgruz(){
        return $this->gruz;
    }
    function setgruz($gruz){
        $this->gruz = $gruz;
    }
    function info(){
        return parent::info() . "Vladelec: " . $this->sobstv . PHP_EOL;
    }
}

$vag = new Sobstv();
$vag->osnost = 4;
$vag->tonag = 45;
$vag->dor_priv = "Sows Relwey";
$vag->setgruz("Coal");
$vag->sobstv = "UTF compani";

echo $vag->info();


