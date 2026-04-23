<?php
declare(strict_types=1);

class Stack
{
    private $size = 0;

    private $data = [];

    private $capacity = 10;

    public function __construct()
    {
        $this->data = array_fill(0, $this->capacity, null);
    }

    public function push(int $n)
    {
        if ($this->size + 1 > $this->capacity) {
            $this->capacity += 10;

            $oldData = $this->data;
            $this->data = array_fill(0, $this->capacity, null);

            for ($i = 0; $i < $this->size; ++$i) {
                $this->data[$i] = $oldData[$i];
            }
        }

        $this->data[$this->size] = $n;
        $this->size++;
    }

    public function top()
    {
        if ($this->size === 0) {
            return null;
        }
        
        return $this->data[$this->size - 1];
    }

    public function pop()
    {
        if ($this->size === 0) {
            return null;
        }

        $n = $this->data[$this->size - 1];
        $this->data[$this->size - 1] = null;

        $this->size--;

        return $n;
    }
}

$stack = new Stack();
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->pop();
$stack->pop();
$stack->push(4);
$stack->push(5);

var_dump($stack);

var_dump($stack->top());
