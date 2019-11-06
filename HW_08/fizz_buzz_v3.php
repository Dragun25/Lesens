<?php


$fizz = $_POST["fizz"];
$buzz = $_POST["buzz"];
$num = $_POST["num"];

for ($i=1; $i <= $num; $i++) { 

   	if ($i%$fizz ==0) $s .= F;
	if ($i%$buzz ==0) $s .= B;
	if (($i%$fizz!=0) && ($i%$buzz!=0)) $s .=$i ;
echo "$s <br/>";
$s = '';
	
}