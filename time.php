<html>
<head>
	<meta content="text/html" charset="utf-8">
	<title>tile</title>
	<script type="text/javascript">
		var num=5;
		setInterval(function t(){
			--num;
			document.getElementById("time").innerHTML=num;
			if (num == 0) {
				window.location.href="http://www.baidu.com";
			};		
		},1000);
	</script>
</head>
<body>
	<span id="time">5</span><span>退出</span>
</body>
</html>