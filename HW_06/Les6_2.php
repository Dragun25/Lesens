<?php
echo "Введите данные - ";
$handle = fopen("php://stdin", "r");
$vvod = fgets ($handle);

$one = '  *  ';
$tree = ' *** ';
$five = '*****';


if ($vvod >0 && $vvod%2 !=0){
// 	if($vvod == 1) echo $one . PHP_EOL;
// 	elseif ($vvod == 3) echo $one . PHP_EOL . $tree . PHP_EOL . $one . PHP_EOL;
// 	elseif ($vvod == 5) echo $one . PHP_EOL . $tree . PHP_EOL . $five . PHP_EOL . $tree . PHP_EOL . $one . PHP_EOL;
// }
// else echo "Ошибка числа";

for ($i=1; $i <= $vvod ; $i +=2) { 
	if ($i == 1) echo '     *' . PHP_EOL;
	if ($i == 3) echo '    ***' . PHP_EOL;
	if ($i == 5) echo '   *****' . PHP_EOL;
	if ($i == 7) echo '  *******' . PHP_EOL;
	if ($i == 9) echo ' *********' . PHP_EOL;
	if ($i == 11) echo '***********' . PHP_EOL;
}
for ($i=($vvod-2); $i >= 1 ; $i -=2) { 
	if ($i == 1) echo '     *' . PHP_EOL;
	if ($i == 3) echo '    ***' . PHP_EOL;
	if ($i == 5) echo '   *****' . PHP_EOL;
	if ($i == 7) echo '  *******' . PHP_EOL;
	if ($i == 9) echo ' *********' . PHP_EOL;
	if ($i == 11) echo '***********' . PHP_EOL;
}
}