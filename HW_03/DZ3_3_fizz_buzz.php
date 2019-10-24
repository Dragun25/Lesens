<?php

$bufer = fopen("FBN_1.txt", "r");   
$FBN_rez = fopen("FBN_rez.txt", "w");

while (!feof($bufer))		
	{
		$str = fgets($bufer);
		list($fizz, $buzz, $num) = explode(" ", $str);
		for ($i=1; $i <= $num; $i++) { 
			if ($i%$fizz ==0) $s.=F;
			if ($i%$buzz ==0) $s.=B;
			if (($i%$fizz!=0) && ($i%$buzz!=0)) $s.=$i ;
			fwrite ($FBN_rez, $s);
			fwrite ($FBN_rez, " ");
			echo "$s ";
			$s = '';
		}
		fwrite ($FBN_rez, "\n");
	}
fclose($bufer);
fclose($FBN_rez);