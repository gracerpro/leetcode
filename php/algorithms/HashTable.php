<?php
declare(strict_types=1);

class HashTable
{
    private array $buckets = []; // TODO: linked list

    public function __construct(int $size)
    {
        $this->buckets = array_fill(0, $size, []);
    }

    public function setValue(string $key, string $value)
    {
        $index = $this->hash($key);

        foreach ($this->buckets[$index] as $_key => $_value) {
            if ($_key === $key) {
                $this->buckets[$index][$key] = $value;
                return;
            }
        }

        $this->buckets[$index][$key] = $value;
    }

    public function getValue(string $key)
    {
        $index = $this->hash($key);

        foreach ($this->buckets[$index] as $_key => $value) {
            if ($_key === $key) {
                return $value;
            }
        }

        return null;
    }

    public function deleteValue(string $key)
    {
        $index = $this->hash($key);

        foreach ($this->buckets[$index] as $_key => $value) {
            if ($_key === $key) {
                unset($this->buckets[$index][$_key]);
                return;
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

        return $hash % count($this->buckets);
    }
}

$table = new HashTable(10);
$table->setValue('big', 'aaa');
$table->setValue('boss', 'bbb');
$table->setValue('data', 'ddd');
$table->setValue('data', 'dddddd');

var_dump($table);

var_dump($table->getValue('boss'));
var_dump($table->getValue('no'));

echo 'data', "\n";
var_dump($table->getValue('data'));
$table->deleteValue('data');
var_dump($table->getValue('data'));

var_dump($table);