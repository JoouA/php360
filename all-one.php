<?php
	// fopen
	$path = dirname(__FILE__);
	$filename = $path.'\song.txt';
	// echo $filename;
	$handle = fopen($filename, 'r');

	$content = fread($handle, filesize($filename));
	// echo $content;

	fclose($handle);

	$handle = fopen($filename, 'a+');

	fwrite($handle, "\nhelloworld tommy");
	fclose($handle);
	echo "\n";
	echo "fileatime(取得文件的上次访问时间):", date('Y-m-d H:i:s',fileatime($filename));
	echo "\n";
	echo "filectime（取得文件inode的修改时间）:", date('Y-m-d H:i:s',filectime($filename));
	echo "\n";
	echo "filemtime(取得文件修改时间):", date('Y-m-d H:i:s',filemtime($filename));
	echo "\n";


	if (function_exists('hello')) {
	 	echo "function exists\n"; 	
	 }else{
	 	echo "function not exists\n";
	 }  
?>