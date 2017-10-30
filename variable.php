<?php
	$a=1;
	$b=2;
	$c=3;
	echo $a,$b,$c; 
	$str="tangwtna@163.com";
	echo strrchr($str,'@');
	echo "\n";
	echo str_repeat($a, 12);

	// str_replace(search, replace, subject)
	echo "\n";
	echo $ch=urlencode('唐志凯');
	echo "\n";
	echo urlencode('machengcheng');
	echo "\n".urldecode($ch);
 ?>