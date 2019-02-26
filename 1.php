<?php
$n=6;
$m=2;
echo ysfh($n,$m);
function ysfh($n,$m)
{
	$r=0;
	for ($i=2; $i <= $n; $i++) 
	{ 
		$r=($r+$m)%$i;
	}
	echo $r+1;
}