<?php
	//打开目录
	//读取目录中的文件
	//如果是目录就继续打开目录
	//读取子目录的文件
	//是文件就打印出来 
	// 遍历目录
	function loopDir($dir){
		$handle = opendir($dir);
		while (false !==($file = readdir($handle))) {
			if ($file != '.' && $file != '..' ) {
				$filename = $dir.'\\'.$file;
				echo ($filename=is_file($filename)?$filename:null)?$filename."\n":null;
				if (filetype($dir.'\\'.$file) == 'dir') {
				 	loopDir($dir.'\\'.$file);
				 } 		
			}
		 }
	}
	$dir = 'D:\phpStudy\WWW\blog365';
	loopDir($dir);
?>