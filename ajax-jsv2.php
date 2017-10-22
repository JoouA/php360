<html>
<head>
  <meta content="text/html" charset="utf-8">
  <title>ajax-jsv2</title>
  <script type="text/javascript">
    var xmlhttp;
    function loadXML(url,fun){
      xmlhttp = window.XMLHttpRequest? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP'); 
      xmlhttp.onreadystatechange = fun;
      xmlhttp.open("post",url,true);
      xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
      var data = "name=weitao&sex=boy";
      // xmlhttp.send('name=weitao&sex=boy'); 
      xmlhttp.send(data); 
    }
    function func() {
      var fun = function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
        var data = eval('('+xmlhttp.responseText+')');//把传回来的字符串解析成json对象
        document.getElementById("h2").innerHTML = 'name:'+data.name+'sex:'+data.sex; 
        };
      };
      loadXML("post.php",fun);
    }
  </script>
</head>
<body>
  <h2 id="h2">content</h2>
  <button type="button" onclick="return func();">click ajax </button>
</body>
</html>