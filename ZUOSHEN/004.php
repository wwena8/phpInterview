<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2020/5/30
 * Time: 9:10 上午
 */
/**
 * 4 只利用递归函数实现栈的逆序
 */
$p = new SplStack();
$p->push(1);
$p->push(2);
$p->push(3);
while (!$p->isEmpty()) {
    $data = $p->pop();
    echo $data;
}