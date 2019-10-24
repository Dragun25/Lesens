<?php
// Пока не работает, но я пытаюсь
$start = microtime(true);
$max = 5;
echo "2" . PHP_EOL . "3" . PHP_EOL . "5" . PHP_EOL . "7" . PHP_EOL;
define("PROSTO", 100);
$i = 8;
while (true){
    if($i%2 !=0 && $i%3 !=0 && $i%5 !=0 && $i%7 !=0 && sqrt($i) != floor(sqrt($i))) {
        echo $i . PHP_EOL;
        $max +=1;
    }
    $i +=1;
    if (PROSTO == $max) break;
}

echo 'Время выполнения скрипта: '.round(microtime(true) - $start, 4).' сек.';