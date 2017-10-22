<html>
<head>
	<meta content="text/html" charset="utf-8">
	<title>jQuery Ajax</title>
	<script src="https://cdn.bootcss.com/jquery/3.2.0/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#bt1').click(function(){
				$('#txt').load('content.txt');
			});

			$('#bt2').click(function(){
				$('h3').load('content.txt #p1');
			});
			// $(ele).load()
			$('#bt3').click(function(){
				$('h1').load('content.txt #p1',function(responeTxt,statusTxt,xhr){
					if (statusTxt == 'success') {
						alert(responeTxt);
					}else{
						alert('get data error');
					}		
				});
			});
			//$.get() ajax
			$("#bt4").click(function(){
				$.get('get.php',function(data,status){
					if (status == 'success') {
						alert("status:"+status+"\n"+"data:"+data);
					};
				});
			});
			// $.post() ajax
			$("#bt5").click(function(){
				$.post('post.php',{'name':'jack','sex':'boy'},function(data,status){
					alert("status:"+status+"\n"+"data:"+data);	
				});
			});

			// $.ajax() ajax
			$("#bt6").click(function(){
				$.ajax({
					url:"get.php",
					method:"get",
					dataType:"json",
					success: function(data){
						alert('name:'+data.name+'\nsex'+data.sex);
					}
				});	
			});
			// $.ajax() ajxa
			$("#bt7").click(function(){
				$.ajax({
					url:"post.php",
					method:"post",
					data:{'name':'weitao','sex':'boy'},
					dataType:"json",
					success:function(data){
						alert('name is '+data.name+'sex is'+data.sex);
					}
				});
			});
		});
	</script>
</head>
<body>
	<h2 id="txt">请点击下面的按钮，通过 jQuery AJAX 改变这段文本。</h2>
	<button id="bt1">点击改变内容</button>
	<div><h3>$(element).load(url,data,callback)</h3></div>
	<button id="bt2"> "demo_test.txt" 文件中 id="p1" 的元素的内容，加载到指定的 &lt;div&gt; 元素中</button>
	<div><h1>$(ele).load(content.txt,function(){})</h1></div>
	<button id="bt3">click to show alert</button>
	<div><h2>$.get</h2></div>
	<button id="bt4">$.get()</button>
	<!-- // $.post() ajax -->
	<div><h2>$.post</h2></div>
	<button id="bt5">$.post</button>
	<div id="div"><h2>$.ajax()</h2></div>
	<button id="bt6">$.ajax() get</button>
	<div><h2>$.ajax() post</h2></div>
	<button id="bt7">$.ajax()post</button>
</body>
</html>