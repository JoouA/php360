<?php
	// loop
	function loopDir($dir){
		$handler =  opendir($dir);
		while (($file = readdir($handler))!== false ) {
			if ($file != '.' && $file != '..') {
				echo  ($filename=is_dir($dir.'\\'.$file)? NULL : $dir.'\\'.$file )? $filename."\n" : NULL;			
				if (is_dir($dir.'\\'.$file)) {
					loopDir($dir.'\\'.$file);
				}

			}
		}
	}
	$dir = 'E:\phpStudy\WWW\php360/chapter-7';
	loopDir($dir);
?>