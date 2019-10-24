<?php

$array_1 = ['php', 'mysql', 'hom_work', 'a_level'];
$array_2 = ['home', 'dog', 'Ponomarenko', 'bugagagagaga'];

function dlin_array($array_1, $array_2)
{
	if (count($array_1) == count($array_2)){
		foreach ($array_1 as $value) {
			$x = iconv_strlen($value);
			$array_1_schet[] .= $x;
		}

		foreach ($array_2 as $value_2) {
			$y = iconv_strlen($value_2);
			$array_2_schet[] .= $y;
		}
		// print_r($array_1_schet);
		// print_r($array_2_schet);
		for ($i=0; $i < count($array_1); $i++) { 
			$z = abs($array_1_schet[$i]-$array_2_schet[$i]);
			$array_itog[$i] =$z;
		}
		return $array_itog;
	}
	else echo("Ошибка. Сравниваемые массивы не равны");
}
print_r(dlin_array($array_1, $array_2));