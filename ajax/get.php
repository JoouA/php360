<?php
	function get(){
		$data = array('name'=>'jack','sex'=>'renyao');
		echo json_encode($data);
	}
	get();
?>