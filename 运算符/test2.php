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
	// print($a++);
	echo  $a + $a++;
	// xdebug_debug_zval('a');

	$x = 3;
	// xdebug_debug_zval('x');

	$x = $x +5;
	// xdebug_debug_zval('x');

	echo "\n";

	$a = 2;
	// $b = &$a;

	echo ++$a + $a++; // 3 + 3 =6
	echo "\n";
	echo ++$a + $a*=2; //  5 + 5*2 = 15  a => 10
	echo "\n";

	echo --$a + $a--; //  9 + 9 = 18   a = 9;
	echo "\n";

	echo --$a - $a--; // (8-1)  - 7 = 0  a= 7;
	echo "\n";

	echo ++$a + $a--; // (7-1+1) +7 = 14; 
	echo "\n";

	echo $a++ + $a--; //(7-1) + (6+1) = 6 +7 = 13  
	echo "\n";

	echo --$a + --$a; //(7-1 -1)=5 + (5-1) = 4 +5 = 9  
	echo "\n";

	$a = 1;
	$c = $a + ($a++);  // $a++ 相当于是复制了一个a 然后对a进行了操作 所以 2 + 1 = 3
	var_dump($c);//3  ==》 2 + 1 = 3
	
	$a = 1;
	$c = (++$a)+$a;  // 2 + 2 = 4
	var_dump($c);//4
	
	$a = 1;
	$c = (++$a)+($a++); // 2 + 2 = 4
	var_dump($c);//4
	
	$a = 1; 
	$b = &$a;
	$c = (++$a)+($a++); // 2 + 2 = 4  // php 7.0
	$c = (++$a)+($a++); // 2 + 2 = 4
	var_dump($c);  // 4
?>