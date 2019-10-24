<?php

$bufer = fopen("FFF.txt", "r");
$max_str = fopen("FFF2.txt", "w");

while (!feof($bufer)) {
	$x = fgets($bufer);
	list($dannie, $rez) = explode(';', $x);
	$schet = explode(' ', $dannie);
	$itog = explode(' ', $rez);
	$y = [count($schet), (array_sum($schet)%count($schet))];
	// print_r($y);
	if ($y == $rez)
		echo "$dannie ; $rez - true";
	else  echo "$dannie ; $rez - false";
	
}
