<?php

$a = 1;
$b = 2;

function somme($a, $b) 
{
	return $a + $b;
}

$b = somme($a, $b);

echo $b;