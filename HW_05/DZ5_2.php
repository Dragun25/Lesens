<?php
$start = microtime(true);
define("PROSTO", 100);
$i = 2;
while (true){
    $mas_tmp = range(2, $i);
    foreach ($mas_tmp as $value){
        if($i%$value ==0) $schet +=1;
    }
    unset($mas_tmp);
    if($schet ==1) {
        $sum_pros += $i;
        $max +=1;
    }
    $schet =0;
    $i +=1;
    if (PROSTO == $max) break;

}
echo "$sum_pros" . PHP_EOL;
echo 'Время выполнения скрипта: '.round(microtime(true) - $start, 4).' сек.';