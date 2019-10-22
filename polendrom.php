<?php
$start = microtime(true);

$i = 2;
$end = 100000;
$tmp = range($i, $end);
$itog = array();
foreach ($tmp as $x){
    foreach ($tmp as $y){
        if ($x == $y) {
            array_push($itog, $y);
            continue;
        }
        if ($y%$x ==0) unset($tmp[array_search($y, $tmp)]);
        
    }
}
// print_r($itog);
foreach (array_reverse($itog) as $xx) {
	if ($xx == strrev($xx)) {
		$maxxx = $xx;
		break;
	}
}

echo $maxxx . PHP_EOL;

echo 'Время выполнения скрипта: '.round(microtime(true) - $start, 4).' сек.';