<?php

$array_1 = ['php', 'mysql', 'hom_work', 'a_level'];
$array_2 = ['home', 'dog', 'Ponomarenko', 'bugagagagaga'];

function dlin_array($array_1, $array_2)
{
	if (count($array_1) == count($array_2)){
		for ($i=0; $i < count($array_1); $i++) { 
			$z = abs(iconv_strlen($array_1[$i])-iconv_strlen($array_2[$i]));
			echo "$z";
			$array_itog[$i] =$z;
		}
		return $array_itog;
	}
	else echo("Ошибка. Сравниваемые массивы не равны");
}
print_r(dlin_array($array_1, $array_2));