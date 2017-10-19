<?php
	$str = '国伟信安';
	$pattern = '/[\x{4e00}-\x{9fa5}]+/u';

	$newStr = preg_replace($pattern, "<script>alert('hello world');</script>", $str);

	echo $newStr;


	$pattern = '/^138\d{8}$/';

	$phone = '13812345678';
	preg_match($pattern, $phone,$match);

	var_dump($match);

	
	// 正则表达式匹配图片的src资源   .*? 不让其贪婪
	$pic = '<img alt="高清无码" id="av"  src="av.jpg"/>';
	$pattern = '/<img(.*?)src="(.*?)"(.*?)\/?>/i';  // i 不区分大小写
	preg_match($pattern, $pic,$match);
	var_dump($match);
	$src  = $match[2];
	echo $src;

	// 计算磁盘还有多少的剩余量
	$size = disk_free_space('D:');
	echo $size/(1024*1024*1024);
?>