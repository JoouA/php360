<?php
	// 函数
	$a = 10; // 全局变量
	function number(&$a){
		$a = 100;
	}

	number($a);
	echo $a;

	echo "\n+++++++++++++++++++++++++++++\n";
	function func1(){
		global $a;  // 使用global是和全局变量之间建立了引用的关系
		$a = 1000; 
		echo $a;
	}

    func1();

    echo "\n++++++++++++++++++++++++++++\n";
    echo $a;
    echo "\n++++++++++++++++++++++++++++\n";

    function func2(){
    	$GLOBALS['a'] = 11111;
    	echo $GLOBALS['a'];    	
    }

    func2();  // 11111

    //print_r($GLOBALS);  //$GLOBALS其实是包含了$_REQUEST,$_POST,$_GET 等
    echo "\n";
    echo PHP_VERSION;  // 7.0.12
    echo "\n";


    echo "\n++++++++++++++++++++++++++++++++\n";

    function func3(){
    	static $a = 1;

    	echo $a++;
    }

    func3();
    func3(); 
    func3(); 
    func3(); 
    func3();

    $count = 5;
    function get_count(){
    	static $count;
    	return ++$count;
    }
    echo "\n";
    echo $count;  // 5
    echo "\n";
    ++$count; // 6

    echo get_count(); // null
    echo "\n"; 
    echo get_count(); //1
    echo "\n";

    //return references
    function &myfunc4(){
       static $a = 103;  // 静态变量是局部的，不是全局 非静态局部变量在方法结束的时候就会被销毁

       return $a;
    }

    echo myfunc4();

    $b = &myfunc4();
    $b = 108;
    echo myfunc4();
    echo "\n";
    $ip = gethostbyname('www.ccsec.cn');

    echo $ip;
    echo "\n";
    echo  ip2long($ip);
    echo "\n";
    echo long2ip($ip);
    echo "\n";

    $var1 = 5;
    $var2 = 10;

    function foo(&$my_var){
        global $var1;
        $var1 += 2;
        $var2 = 4;
        $my_var +=3;
        return $var2;
    }
    $my_var = 5;
    echo foo($my_var)."\n";    // 4   //$my_var = 8    
    echo $my_var."\n";  // 8
    echo $var1;  // 7
    echo "\n";
    echo $var2;  // 10
    $bar = 'foo';
    $my_var = 10;
    echo "\n";
    echo $bar($my_var)."\n";  // 4

?>