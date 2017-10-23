<?php

//单引号
$a = 'hello world';
echo '单引号：'.$a;
echo "<br>";
//双引号
echo "双引号：{$a}";
echo "<br>";

//heredoc
$str = <<<EO
'\$a'的值是'{$a}' 这是heredoc的用法相当于是双引号
EO;
echo $str;
echo "<br>";
//nowdoc
$str2 = <<<'ED'
'$a'的值是"{$a}"这是nowdoc的用法相当于是单引号
ED;
echo $str2;
echo "<br>";
echo "浮点类型不能运动到比较运算符中,<br>";
echo "if (0.1 + 0.7 == 0.8) {
	 0.1+0.8 在计算机是转换成二级制中进行计算的，会有损耗两者加起来等于0.799999999
};";
echo "<br>";

if ( (0.1 +0.7) == 0.8) {
	echo $a + $b;
}else{
	echo "在计算机是转换成二级制中进行计算的，会有损耗两者加起来等于0.799999999<br>";
}

// 8种数据类型
echo "(标量)整形 浮点型 字符串 布尔 (复合) 数组 对象  （特殊）资源 NULL <br>";

echo "布尔类型的false的7种情况，分别是整形0，浮点0.0，布尔false，字符串空，数组空，null<br>";

$arr = array('',0,0.0,"",false,array(),null);
foreach ($arr as $key => $value) {
	if ($value) {
		echo 'cuvcj';
	}
}

if (0.000000) {
	echo "hahahha";
}

echo '数组类型，超全局变量$_GLOBALS,$_GET,$_POST,$_COOKIE,$_REQUEST,$_SESSION,$_SERVER,$_FILES,$_ENV<br>';
echo '$_SERVER[\'SERVER_ADDR\']：'.$_SERVER['SERVER_ADDR'];
echo "<br>";
echo '$_SERVER[\'REMOTE_ADDR\']：'.$_SERVER['REMOTE_ADDR'];
echo "<br>";
echo '$_SERVER[\'SERVER_NAME\']：'.$_SERVER['SERVER_NAME'];
echo "<br>";
echo '$_SERVER[\'REQUEST_TIME\']：'.$_SERVER['REQUEST_TIME'];
echo "<br>";
echo '$_SERVER[\'PHP_SELF\']：'.$_SERVER['PHP_SELF'];
echo "<br>";
echo '$_SERVER[\'QUERY_STRING\']：'.$_SERVER['QUERY_STRING'];
echo "<br>";
echo '$_SERVER[\'HTTP_REFERER\']：'.$_SERVER['HTTP_REFERER'];
echo "<br>";
echo '$_SERVER[\'HTTP_USER_AGENT\']：'.$_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo '$_SERVER[\'REQUEST_URI\']：'.$_SERVER['REQUEST_URI'];
echo "<br>";
echo '$_SERVER[\'PATH\']：'.$_SERVER['PATH'];

echo "<br>";

$str = "hello";
function test($str){
	$str = "hello world";
}
test($str);
echo $str;

echo "<br>";

$str = "hello";
function test2(&$str){
	$str = "hello world";
}
test2($str);
echo $str;
echo "<br>";
define('HOST', '192.168.2.41');

echo HOST;
echo "<br>";
function xxx(){
	echo HOST;	
}
xxx();

?>