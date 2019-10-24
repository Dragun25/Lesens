<?php

function dlin_str($x)
{
	foreach ($x as $value) {
	$s = iconv_strlen($value);
		if ($s > $max) { 
			$maxstr = $value;
			$max = $s;
		}
	}
	echo "$maxstr";
}

$x = ["7gcgfvhvhvhv", "2hvhvhvhvhvhvhvhvhvvhvhvh",ghhtrgrt, yyy];

dlin_str($x);