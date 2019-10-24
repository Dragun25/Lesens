<?php
// Этот скрипт берёт данные из файла F1.txt и перемещает в файл F2.txt только не четные строки
function open($bufer = '')
{
	$bufer = fopen("F1.txt", "r");
	return $bufer;
	fclose($bufer);
}
function writ($nechet = '')
{
		$x = fopen("F2.txt", "w");
		$f2txt = open($bufer);
	if ($f2txt)
	{
		while (!feof($f2txt))
		{
			$nechet = fgets($f2txt);
			$musor = fgets($f2txt);
			fwrite ($x, $nechet);
		}
		return $nechet;
	}
	else echo "Ошибка чтения файла";
return $nechet;
fclose($x);
}

writ($nechet);