<?php
declare(strict_types=1);

class ListItem {
    public function __construct(
        public string $key,
        public string $value
    ) {
    }
}

class HashTable
{
    /** @var (SplDoublyLinkedList|null)[] */
    private array $buckets = [];

    private int $size;

    public function __construct(int $size)
    {
        $this->size = $size;

        for ($i = 0; $i < $size; ++$i) {
            $this->buckets[$i] = null;
        }
    }

    public function setValue(string $key, string $value)
    {
        $index = $this->hash($key);
        $list = $this->buckets[$index];

        if ($list === null) {
            $list = new SplDoublyLinkedList();
            $this->buckets[$index] = $list;
        }

        for ($list->rewind(); $list->valid(); $list->next()) {
            /** @var ListItem $item */
            $item = $list->current();

            if ($item->key === $key) {
                $item->value = $value;
                return;
            }
        }

        $list->push(new ListItem($key, $value));
    }

    public function getValue(string $key)
    {
        $index = $this->hash($key);
        $list = $this->buckets[$index];

        if ($list === null) {
            return null;
        }

        for ($list->rewind(); $list->valid(); $list->next()) {
            /** @var ListItem $item */
            $item = $list->current();

            if ($item->key === $key) {
                return $item->value;
            }
        }

        return null;
    }

    public function deleteValue(string $key)
    {
        $index = $this->hash($key);
        $list = $this->buckets[$index];

        if ($list === null) {
            return;
        }

        $i = 0;
        for ($list->rewind(); $list->valid(); $list->next()) {
            /** @var ListItem $item */
            $item = $list->current();

            if ($item->key === $key) {
                $list->offsetUnset($i);

                if ($list->isEmpty()) {
                    $this->buckets[$index] = null;
                }
                break;
            }

            ++$i;
        }
    }

    public function clear()
    {
        for ($i = 0; $i < $this->size; ++$i) {
            $list = $this->buckets[$i];

            if ($list) {
                $this->buckets[$i] = null;
            }
        }
    }

    private function hash(string $key): int
    {
        $hash = 0;
        $length = mb_strlen($key);
        for ($i = 0; $i < $length; ++$i) {
            $hash += mb_ord($key[$i]);
        }

        return $hash % $this->size;
    }
}

$table = new HashTable(10);
$table->setValue('big', 'aaa');
$table->setValue('boss', 'bbb');
$table->setValue('data', 'ddd');
$table->setValue('data', 'dddddd');

var_dump($table->getValue('boss'));
var_dump($table->getValue('no'));

echo 'data', "\n";
var_dump($table->getValue('data'));
$table->deleteValue('data');
var_dump($table->getValue('data'));

echo 'clear', "\n";

$table->clear();
var_dump($table);