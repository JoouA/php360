<?php
	session_start();
	echo session_name(); // PHPSESSID
	echo "<br>";
	echo session_id(); // 会改变
	echo "<br>";
	echo "<pre>";
	/*echo SID;
	echo "\n";*/
	$_SESSION['name'] = 'haha';
	$_SESSION['id'] = 1;
	$_SESSION['time'] = time();
	$_SESSION['pwd'] = __FILE__;
	$_SESSION['php_version'] = PHP_VERSION;
	print_r($_SESSION);
	echo "<br>";
	print_r($_COOKIE);
?>
<a href="1.php?<?php echo session_name().'='.session_id(); ?>">dsdsds</a>