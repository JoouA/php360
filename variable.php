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

	$num=array(1,2,5,67,8,32,2,545,67,787,343,565,4,122);

	print_r($num);

	sort($num);

	print_r($num);

	arsort($num);
	print_r($num);
 	

	$date = "04/30/1973";
	print_r(str_split($date,2)) ;

	//使用逗号或空格(包含" ", \r, \t, \n, \f)分隔短语
	$keywords = preg_split("/[\s,]+/", "hypertext language, programming");
	print_r($keywords);
 ?>