<?php

// 调用类中的方法名也是不区分大小写的
class A{
	function __construct(){
		echo "I am A construct";
	}
	function hello(){
		echo "Hello world";
	}
	function world(){
		echo "world\n";
	}
} 

class B extends A
{
	public function hello(){
		echo "kkkkkkkk\n";
	} 
}


trait animal
{
  public function eat(){
  	echo "eat\n";
  }

  public function run(){
  	echo "run\n";
  }

}

class dog
{
	use animal;
}

$xiaohuang = new dog();
$xiaohuang->eat();
$xiaohuang->run();
 ?>