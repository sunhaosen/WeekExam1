<?php
$arr=[11,12,13,3,2,1];
echo fun($arr);
function fun($arr)
{
	$arr=sort($arr);
	$array=[array_shift[],array_shift[],array_shift[]];
	$count=count($arr);
	for ($i=0; $i < $count; $i++) 
	{ 
		$sum=array_sum($array[])
		if ($sum>array_sum($array[2][$i])) 
		{
			$a[]=$array[2];
			$a[]=$array[0];
			$a[]=$array[1];
		}
		if ($sum<array_sum($array[2][$i])) 
		{
			$a[]=$array[1];
			$a[]=$array[0];
			$a[]=$array[2];
		}
	}
	echo $a;
}