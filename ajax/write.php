<?php
	//read 
	$filename = 'content.txt';
	$handle = fopen($filename, 'r');
	@$content = fread($handle, filesize($filename));
	fclose($handle);
	if ($_POST) {
		//write
		$handle = fopen($filename, 'w');
		$username = $_POST['username'];
		$password = $_POST['password'];
		$data = "<br>\n用户名：".$username."<br>\n密码：".$password."<br>\n";
		$data = $content.$data;
		fwrite($handle, $data);
		fclose($handle);
	}else{
		echo $content;
	}
?>