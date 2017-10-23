<?php
	session_start();
	echo session_id()."   ".session_name();
	echo "<pre>";
	print_r($_SESSION);
?>