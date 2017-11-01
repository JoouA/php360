<?php
	date_default_timezone_set('Asia/Shanghai');
	echo  date('Y-m-d H:m:i',time());
	echo "\n";
	echo "the time:\n";
	$filename = dirname(__FILE__).'\song.txt';		
	echo "fileatime",date('Y-m-d H:i:s',fileatime($filename));
	echo "\n";
	echo "filectime",date('Y-m-d H:i:s',filectime($filename));
	echo "\n";
	echo "filemtime",date('Y-m-d H:i:s',filemtime($filename)); 
 ?>