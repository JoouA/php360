<?php
	session_start();
	echo session_name(); // PHPSESSID
	echo "<br>";
	echo session_id(); // 会改变
	echo "<br>";
	/*echo SID;
	echo "\n";*/
	/*$_SESSION['name'] = 'haha';
	$_SESSION['id'] = 1;
	$_SESSION['time'] = time();
	print_r($_SESSION);*/
?>
<a href="1.php?<?php echo session_name().'='.session_id(); ?>">dsdsds</a>