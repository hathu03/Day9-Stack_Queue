<?php

class Stack
{
    protected array $Stack;
    protected int $limit;

    public function __construct(int $limit = 10)
    {
        $this->Stack = [];
        $this->limit = $limit;
    }

    public function push($item)
    {
        if (count($this->Stack) < $this->limit) {
            array_unshift($this->Stack, $item);
        } else {
            throw new RunTimeException('Stack is full!');
        }
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            throw new RunTimeException('Stack is empty!');
        } else {
            return array_shift($this->Stack);
        }
    }

    public function top()
    {
        return current($this->Stack);
    }

    public function isEmpty()
    {
        return empty($this->Stack);
    }
}