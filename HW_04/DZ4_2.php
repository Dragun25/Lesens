<?php

function podschet($mas_str)
{
	foreach ($mas_str as $tmp) {
	$str = preg_split('//', $tmp, -1, PREG_SPLIT_NO_EMPTY);

		foreach ($str as $c) {
			if ($str_schet[$c]) $str_schet[$c] +=1;
				else $str_schet[$c] = 1; 
		//$str_schet[$c] = isset($str_schet[$c]) ? $str_schet[$c] + 1 : 1;
}
}
print_r($str_schet);
}

$mas_str = [aaa, aaa, sss, dddd, 444444];
$mas_str = preg_replace('/[0-9]+/', '', $mas_str);
print_r($mas_str1);

podschet($mas_str);