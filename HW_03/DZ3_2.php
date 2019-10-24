<?php

$bufer = fopen("F1.txt", "r");
$max_str = fopen("F2.txt", "w");

	while (!feof($bufer))
	{
		$str = fgets($bufer);
		$n +=1;
		$num_str += iconv_strlen($str);
	}
	
$srednaya = $num_str/$n;
$bufer1 = fopen("F1.txt", "r");
	while (!feof($bufer1))
	{
		$str1 = fgets($bufer1);
		$x = iconv_strlen($str1);
		if ($srednaya < $x) 
		{
		echo "$str1\n";
		fwrite ($max_str, $str1);
		}
	}
return $bufer;
return $bufer;
fclose($bufer);
fclose($max_str);