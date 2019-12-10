<?php

function a($test){
    static $index=0;
    if ($index%2==0) {
    	$test[$index] =0;
    }
    if (count($test)-1 == $index) {
        return $test[$index];
    }
    
    $aa = $test[$index] + a($test, $index++);
    return $aa;
}

$test = array(1, 2, 3, 4, 5);


echo a($test). PHP_EOL;