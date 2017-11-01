<?php
class A
{
	var $name;
	private $age;

	public function __construct($name,$age){
		$this->setInfo($name,$age);
		$this->info();
	}


	private function setInfo($name,$age){
		$this->name = $name;
		$this->age = $age;
	}

	private function info(){
		echo "name:",$this->name,"age:",$this->age;
	}
}	

/*$a = new A('jack',31);

echo  $a->name;*/



// 上坡选ing
abstract class AbstractClass
{
	// 定义抽象方法
	abstract protected function getValue();
	abstract protected function prefixValue($prefix);
	abstract public function image();

	//普通方法
	public function printOut(){
		print $this->getValue()."\n";
	}
}

class testA extends AbstractClass{
	protected function getValue(){
		return 'ConcreteClass1';
	}

	public function prefixValue($prefix){
		return "{$prefix}concreteClass1";
	} 	

	public function image(){
		echo "I an image function";
	}

}

$testA = new testA();

// echo $testA->prefixValue('hello');







?>