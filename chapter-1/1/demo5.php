<?php

// unset 只会取消引用，不会销毁空间
$a = 1;
xdebug_debug_zval('a');
$b = &$a;

unset($b);
xdebug_debug_zval('a');
echo $a. "\n";
