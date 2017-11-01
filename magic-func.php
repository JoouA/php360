<?php
class Person
{
	private $name;
	private $sex;
	private $age;

	public function __get($property_name){
		echo "调用__get魔术方法\n";
		if (isset($property_name)) {
			return ($this->$property_name);
		}else{
			return null;
		}
	}

	public function __set($property_name,$value){
		echo "调用__set魔术方法\n";
		$this->$property_name = $value;
	}

	public function __isset($str){
		echo "isset()函数测试私有成员的时候，自动调用\n";
		return isset($this->$str);
	} 

	public function __unset($str){
		echo "当在类外部使用unset()函数类删除私有成员变量时候自动调用\n";
		unset($this->$str);	
	}
}
$p1 = new Person();  
$p1->name = "Tom";  
echo var_dump(isset($p1->name))."\n";  
echo $p1->name."\n";  
unset($p1->name);  
// unset了其变量 所以echo的时候会报错
echo $p1->name;  	 
?>