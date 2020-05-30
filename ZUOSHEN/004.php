<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2020/5/30
 * Time: 9:10 上午
 */
/**
 * 4 只利用递归函数实现栈的逆序
 * 任何递归形式都可以转化为非递归形式
 * 思路：
 * 1 一个栈中得到栈底元素，并移除之
 * 2 递归函数就是个栈
 * @param SplStack $stack
 * @return mixed
 */
function getAndRemoveLast($stack)
{
    $result = $stack->pop();
    if ($stack->isEmpty()) {
        return $result;
    } else {
        $last = getAndRemoveLast($stack);
        $stack->push($result);
        return $last;
    }
}

/**
 * @param SplStack $stack
 */
function reverse($stack)
{
    if ($stack->isEmpty()) {
        return;
    }
    $last = getAndRemoveLast($stack);
    reverse($stack);
    $stack->push($last);
}

$stack = new SplStack();
$stack->push(1);
$stack->push(2);
$stack->push(3);
reverse($stack);
echo $stack->top();