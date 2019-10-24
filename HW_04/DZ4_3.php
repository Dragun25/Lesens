<?php
$bufer = file('fbn_1.txt');
//print_r($bufer);
function fbn($z)
{
	list($fizz, $buzz, $num) = explode(" ", $z);
	for ($i=1; $i <= $num; $i++) { 
		if ($i%$fizz ==0) $s.=F;
		if ($i%$buzz ==0) $s.=B;
		if (($i%$fizz!=0) && ($i%$buzz!=0)) $s.=$i ;
		$rez .= "$s ";
		$s = '';
	}
	return $rez;
}


array_map('xxx', $bufer)