<?php
declare(strict_types=1);

class Node
{
    public function __construct(
        public int $value,
        public Node|null $next = null,
        public Node|null $prev = null,
    ) {
    }
}

class LinkedList
{
    private int $size = 0;

    private Node|null $head = null;
    private Node|null $tail = null;

    public function __destruct()
    {
        // free
    }

    public function push(int $value)
    {
        $node = new Node($value);

        if ($this->head === null) {
            $this->head = $node;
        }
        if ($this->tail === null) {
            $this->tail = $node;
        } else {
            $node->prev = $this->tail;
            $this->tail->next = $node;
            $this->tail = $node;
        }

        $this->size++;
    }

    public function pushLeft(int $value)
    {
        $node = new Node($value);

        if ($this->head === null) {
            $this->head = $node;
        } else {
            $node->next = $this->head;
            $this->head->prev = $node;
            $this->head = $node;
        }
        if ($this->tail === null) {
            $this->tail = $node;
        }

        $this->size++;
    }

    public function pop()
    {
        if ($this->size === 0) {
            return;
        }

        $node = $this->tail->prev;

        if ($node !== null) {
            $node->next = null;
        } else {
            $this->head = null;
        }

        // free $tail

        $this->tail = $node;
        $this->size--;
    }

    public function popLeft()
    {
        if ($this->size === 0) {
            return;
        }

        $node = $this->head->next;

        if ($node !== null) {
            $node->prev = null;
            $this->head = $node;
        } else {
            $this->tail = null;
        }

        // free $head

        $this->head = $node;
        $this->size--;
    }

    public function getSize(): int
    {
        return $this->size;
    }
}

$list = new LinkedList();
$list->pushLeft(1);
$list->pushLeft(2);
$list->pushLeft(3);
$list->popLeft();

var_dump($list);
