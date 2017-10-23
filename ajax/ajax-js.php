<html>
<head>
	<meta content="text/html" charset="utf-8">
	<title>ajax 原生的版本</title>
	<script type="text/javascript">
		var xmlhttp;
		if (window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		}else{
			xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
		};
		function get(){
			xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				document.getElementById("get").innerHTML=xmlhttp.responseText;
				}
			}
			xmlhttp.open("get","get.php",true);
			xmlhttp.send();
		}
	</script>
</head>
<body>
	<div><h2 id="get">get</h2></div>
	<button onclick="return get();">get</button>
</body>
</html>