<?php
	echo "<a href='test.php?name=jack&age=12'>test.php</a>";
	echo "<br>";
	if ('00==false') {
		echo "1";
	}
	echo "<br>";
	if (0=='0') {
		echo "2";
	}
	echo "<br>";
	if (0==0.0) {
		echo "3";
	}
	echo "<br>";
	if ('0'==0.0) {
		echo "4";
	}
	echo "<br>";
	if (false == 0) {
		echo "5";
	}
	echo "<br>";
	if (false == null) {
		echo "6";
	}
	echo "<br>";
	if (false ==  array()) {
		echo "7";
	}
	echo "<br>";
	$arr = array();
	if ($arr) {
		echo "8";
	}
	echo "<br>";
	if (0=='0') {
		echo "9";
	}
	echo "<br>";
	if ($b = false && true) {
		echo "10";
	}
	echo "<br>";
	if ($b = false and true) {
		echo "11";
	}
	echo "<br>";
	if (array()) {
		echo "12";
	}
	echo "<br>";
	$a = 0;
	$b = 0;

	if ($a = 3 > 1 || $b = 3 > 1 && $a < 2) {
		var_dump($a);
		var_dump($b);
	 	$c = $a++;
	 	$d = ++$b;
	 	echo $a;
	 	echo $b;
	 	echo $c;
	 	echo $d;
	 } 

	echo "<br>";
	$a = 1;
	// xdebug_debug_zval('a');
	echo $a + ++$a; 
	// xdebug_debug_zval('a');
	// echo "$a";

/*	$x = 3;
	xdebug_debug_zval('x');

	$x = $x +5;
	xdebug_debug_zval('x');*/
?>