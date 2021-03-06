<?php
	/**
	 * [关于php中的变量的引用和非引用变量的自增和自减问题]
	 * [在php5.x版本中可以说是一个bug]
	 * [在foreach里面的@抑制报错符号不起作用]
	 * @var integer
	 */
	$a = 1;
	$c = ($a++) + ($a++); // 1 +2 = 3 
	echo $c; 
	echo "\n";
	$c = $a++ + $a++; // 3 + 4 = 7 
	echo $c; 
	echo "\n";
	$c = ++$a + $a++; // 6 + 6 = 12 
	echo $c; 
	echo "\n";
	$c = $a++ + $a++; // 7 + 8 = 15 
	echo $c; 
	echo "\n";
	$c = $a + $a++; // 10 + 9 = 19 
	echo $c; 
	echo "\n";
	$c = $a++ + ++$a; // 10 + 12 = 22 
	echo $c; 
	echo "\n";
	$a = 1;
	$c = $a + $a++; // 2 + 1 = 3
	echo $c; 
	echo "\n";
	    
	$a = 1;
	$c = (++$a)+$a;  //  2 + 2 = 4
	echo $c;
	echo "\n";
	    
	$a = 1;
	$c = (++$a)+($a++); //  2+2 = 4
	echo $c;  
	echo "\n";
	    
	$a = 1;
	$c = (++$a)+($a++);  // 2 + 2 = 4
	echo $c; 
	echo "\n";

	echo "+++++++++++++++++++++++++++++\n";
	$a = 2;
	$b = &$a;
	// unset($b);   // php 5.x版本的变量引用感觉就是由bug
	echo ++$a + $a++; // 3 + 3 = 6  a=>4     // 4 + 3 = 7 a=>4
	echo "\n";
	echo $a + $a*=2; // 8 + 8 = 16 a=>8 	// 8 + 8 =16 a=> 8
	echo "\n";
	echo --$a + $a--; // 7 + 7 = 14 a=>6	// 6 + 7 = 13 a=>6
	echo "\n";
	echo (--$a) - ($a--); //  5 - 5 = 0 a=>4	// 4 - 5 = -1 a=>4
	echo "\n";
	echo ++$a + $a--;  // 5 + 5 = 10 a=>4	// 4 + 5 = 9 a=>４　
	echo "\n";
	echo --$a + $a++;  //  3 + 3 = 6 a=>4	// 4 + 3 = 7 a=> 4
	echo "\n";
	echo --$a + $a++;  //  3 + 3 = 6 a=>4	// 4 + 3 = 7 a=>4
	echo "\n";
	echo $a + ++$a;  //  5 + 5 = 10  a=>5  //  5 + 5 = 10 a=>5
	echo "\n";
	echo $a - ++$a;  //  6 - 6 = 0  a=>6  //  6 - 6 = 0 a=>6
	echo "\n";
	echo --$a - ++$a;  //  5  -  6 = -1  a=>6  //  6 - 6 = 0 a=>6    
	echo "\n";
	echo ++$a - $a--; // 7 - 7 = 0 a=> 6  // 6 - 7 = -1 a=> 6
	echo "\n";
	echo --$a + ($a++) + (--$a) ; // 5 + 5 + 5 = 15  a=>5 // 6 + 5 + 5 = 16    a=> 5/////$a++ 复制一份 然后对其$a 进行修改 在php5.0的引用里面会对之前的数进行修改
	echo "\n";
	echo ++$a + $a-- - --$a + ++$a; // 6 + 6 - 4 + 5 = 13 a=>5 // 5 + 6 - 4 + 5 = 12  a=> 5
	echo "\n";
	echo $a++ + $a-- - --$a; // 5  + 6 - 4 = 7  a=>4 //  5 + 6  -4 = 7   
	/*
	*在php7的b版本里面 无论是变量加上引号还是不加，结果都是一样的
	*在php5.x版本里面 要是第一个变量是++$a,那么后面的$a++和$a-- 都会影响到第一个变量++$a 
	*但是后面的++$a或者--$a 则不会影响到第一个++$a 
	*
	 */
?>