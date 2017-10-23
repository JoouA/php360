<?php

	$filename = './content.txt';
	// 打开文件    使用r+可以在文件的开头写入字符串 但在写入的同事会替换到原本的子字符串
	$handle = fopen($filename, 'r');
	// 读取文件的内容
	$content = fread($handle, filesize($filename));
	fclose($handle);
	// 拼接好要写入的字符串
	$content  = "hellos".$content;
	
	$handle = fopen($filename, 'w');
	// 将字符串写入文件内
	fwrite($handle, $content);
	fclose($handle);
?>