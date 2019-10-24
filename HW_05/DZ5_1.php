<?php

define("FIVE", 5);

//for ($i = 1; $i <=100; $i++) { //Реализация просто на цикле
//    if ($i%FIVE ==0) $five_schet1 +=1;
//}
//echo "Количество констант - $five_schet1";

for ($i = 1; $i <=100; $i++) { // Реализация на миссиве
    if ($i%FIVE ==0) $five_schet[] =$i;
}
print_r ($five_schet) . PHP_EOL;
echo count($five_schet);