<?php

function max_var1($x) // Вариант решения через команду
{
	$max = max($x);
	echo "Максимальное число массива - $max";
}

function max_var2($x) // Вариант решения через цикл
{
	foreach ($x as $value) {
	if ($value >= $max) $max = $value;
}

	echo "Максимальное число массива - $max";
}

$x = [2, 4, 8, 16, 32, 64, 128, 97, 37, 31, 17, 13, 1];
max_var1($x);
echo " \n";
max_var2($x);