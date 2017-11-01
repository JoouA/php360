<?php
	interface A{
		public function eat();
		public function run();
	} 

	class B implements A
	{
		public function run(){
			echo "run";	
		}

		public function Eat(){
			echo "eat";
		}
	}
	$test = new b();
	echo "---\n";
	$test->run();
	echo "\n---\n";
	$test->eat();
 ?>