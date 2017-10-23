<?php
	function post(){
		$name = $_POST['name'];
		$sex = $_POST['sex'];
		$arr = array('name'=>$name,'sex'=>$sex);
		echo json_encode($arr);
	}
	post();
?>