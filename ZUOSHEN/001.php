<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2020/5/30
 * Time: 9:42 上午
 */
/**
 * 实现一个特殊栈，在实现栈的基本功能基础上，O(1)时间复杂度获取最小元素。
 * 思想：
 * 1 两个栈 data、min
 * 2 往data中入数时同时往min中入数
 * 3 当新入元素小于、等于栈顶元素时，元素既入data又入min；当新入元素大于栈顶时新元素入data不入min
 * 4 弹栈时当data栈顶与min栈顶相同时都弹；当data栈顶大于min栈顶时只弹data
 */
class Stack{
    private $data;
    private $min;

    public function __construct()
    {
        $this->data = new SplStack();
        $this->min = new SplStack();
    }

    public function push($e)
    {
        if ($this->data->isEmpty() && $this->min->isEmpty()) {
            $this->data->push($e);
            $this->min->push($e);
        }
        if ($e <= $this->min->top()) {
            $this->data->push($e);
            $this->min->push($e);
        }
        if ($e > $this->min->top()) {
            $this->data->push($e);
        }
    }

    public function pop()
    {
        if ($this->data->isEmpty() || $this->min->isEmpty()) {
            exit(-1);
        }
        if ($this->data->top() > $this->min->top()) {
            return $this->data->pop();
        } else {
            $this->data->pop();
            return $this->min->pop();
        }
    }

    public function getMin()
    {
        return $this->min->pop();
    }
}
$stack = new Stack();
$stack->push(3);
$stack->push(13);
$stack->push(33);
$stack->push(1);
echo $stack->getMin();