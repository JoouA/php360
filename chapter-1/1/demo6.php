<?php

// 对象本身就是引用传递
class Person
{
    public $name = "zhangsan";
}

$p1 = new Person;
xdebug_debug_zval('p1');

$p2 = $p1;
xdebug_debug_zval('p1');

$p2->name = "lisi";
xdebug_debug_zval('p1');

$p3 = $p2;
xdebug_debug_zval('p1');

// 使用clone 就是直接复制一份了 貌似不准守cow机制 直接就复制了一份 而不是等到有数据的操作才进行复制
// $p4 = clone($p3);
$p4 = clone($p3);
xdebug_debug_zval('p1');
$p4->name = 'laiqu';
xdebug_debug_zval('p4');