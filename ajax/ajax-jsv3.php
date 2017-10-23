<html>
<head>
	<meta content="text/html" charset="utf-8">
	<title>ajax v3</title>
	<script type="text/javascript">
	setInterval(get,2000);
	function get(){
		var xmlhttp = window.XMLHttpRequest? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
		xmlhttp.onreadystatechange = function(){
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				document.getElementById('info').innerHTML = xmlhttp.responseText;
			};
		}
		xmlhttp.open('get','write.php',true);
		xmlhttp.send();
	}	
	</script>	
</head>
<body>
	<div align="center">
		<h2>账号信息</h2>
		<p id="info"></p>
	</div>
</body>
</html>