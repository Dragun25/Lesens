<?php
// Если нам необходимо обработать много данных формата fizz_buzz_num нам поможет данный скрипт
// В функцию мы записали скрипт Физ Биз с возможностью ввода данных из вне
function fbn($fizz, $buzz, $num)
{
	for ($i=1; $i <= $num; $i++) { 
		if ($i%$fizz ==0) $s.=F;
		if ($i%$buzz ==0) $s.=B;
		if (($i%$fizz!=0) && ($i%$buzz!=0)) $s.=$i ;
		$rez .= "$s ";
		$s = '';
	}
	return $rez;
}
$bufer = fopen("FBN_1.txt", "r");   
$FBN_rez = fopen("FBN_rez.txt", "w");

while (!feof($bufer))		
	{
		$str = fgets($bufer);
		list($fizz, $buzz, $num) = explode(" ", $str);
		$s = fbn($fizz, $buzz, $num);
			fwrite ($FBN_rez, $s);
			echo "$s \n";
			$s = '';
		fwrite ($FBN_rez, "\n");
	}
fclose($bufer);
fclose($FBN_rez);