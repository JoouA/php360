<html>
<head>
	<meta content="text/html" chaset="utf-8">
	<title>image-base64</title>
</head>
<body>
	<?php
		$content =  base64_encode(file_get_contents('img.jpg'));
	?>
	<img src="<?php echo 'data:image/gif;base64,'.$content; ?>">
</body>
</html>			