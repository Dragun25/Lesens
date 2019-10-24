<?php
// Данный скрипт преднозначен для того чтобы отсортировать те строки что больше среднеарефмитического значения по файлу F1.txt 
function open_file($open = '')
{
	$bufer = fopen("F1.txt", "r");
	return $bufer;
	fclose($bufer);
}

function izmer($izmer = '')
{
	$xaxa = open_file("fi.txt");
	while (!feof($xaxa))
	{
		$str = fgets($xaxa);
		$n +=1;
		$num_str += iconv_strlen($str);
	}
	//echo "$n str and $num_str simvol" ;
$srednaya = $num_str/$n;
return $srednaya;
}
	
function write_file($write_file = '')
{
	$max_str = fopen("F2.txt", "w");
	$bufer1 = open_file($open);
	$sravni = izmer($izmer);
	while (!feof($bufer1))
	{
		$str1 = fgets($bufer1);
		$x = iconv_strlen($str1);
		if ($sravni < $x) 
		{
		fwrite ($max_str, $str1);
		}
	}
fclose($max_str);
}
	
write_file("f2.txt");