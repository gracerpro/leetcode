<?php
declare(strict_types=1);

class Node
{
    public function __construct(
        public int $value,
        public Node|null $next = null,
    ) {
    }
}

class LinkedList
{
    private int $size = 0;

    private Node|null $head = null;
    private Node|null $tail = null;

    public function push(int $value)
    {
        $node = new Node($value);

        if ($this->head === null) {
            $this->head = $node;
        }
        if ($this->tail === null) {
            $this->tail = $node;
        } else {
            $this->tail->next = $node;
            $this->tail = $node;
        }

        $this->size++;
    }

    public function pop()
    {
        if ($this->size === 0) {
            return;
        }
        if ($this->size > 1) {
            $i = 0;
            $node = $this->head;
            while ($i < $this->size - 2) {
                $node = $node->next;
                ++$i;
            }
            $this->tail = $node;
            $this->tail->next = null;
        }

        $this->size--;

        if ($this->size === 0) {
            $this->head = null;
            $this->tail = null;
        }
    }

    public function getSize(): int
    {
        return $this->size;
    }
}

$list = new LinkedList();
$list->push(1);
$list->push(2);
$list->push(3);
$list->pop();
$list->pop();

var_dump($list);
