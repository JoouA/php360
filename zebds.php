<?php
	$str = '国伟信安';
	$pattern = '/[\x{4e00}-\x{9fa5}]+/u';

	$newStr = preg_replace($pattern, "<script>alert('hello world');</script>", $str);

	echo $newStr;


	$pattern = '/^138\d{8}$/';

	$phone = '13812345678';
	preg_match($pattern, $phone,$match);

	var_dump($match);
?>