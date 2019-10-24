<?php
$start = microtime(true);

define("PROSTO", 100);
$i = 2;
$tmp = range($i, 1000);
$itog = array();
foreach ($tmp as $x){
    foreach ($tmp as $y){
        if ($x == $y) {
            array_push($itog, $y);
            continue;
        }
        if ($y%$x ==0) unset($tmp[array_search($y, $tmp)]);
        if (count($itog) == PROSTO) break;
    }
}
print_r($itog);
echo 'Время выполнения скрипта: '.round(microtime(true) - $start, 4).' сек.';