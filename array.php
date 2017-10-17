<?php
// 关于引用方面的问题 数组 unset一下$x 就不会出现这样的问题了
// php7.0 和php5.3的结果是一样的
 $a1 = array(1,2,3);
 $x = &$a1[0];
 $a2 = $a1;
 $a2[0] = 10;
 print_r($a1);


 // 在使引用的时候，要及时对foreach出来的变量进行unset 取消引用 不然会出现问题
 $arr = ['hello','world','nice','work'];
 foreach ($arr as &$value) {
 	echo $value."\n";
 }
 echo $value;
 echo "\n";
 $value = 'haha';
 print_r($arr);
?>