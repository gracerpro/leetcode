<?php
declare(strict_types=1);

class HashTable
{
    private $keys = [];
    private $buckets = [];

    public function setValue(string $key, string $value)
    {
        $index = $this->hash($key);

        if (/** is collizion */) {

        } else {

        }
    }

    public function getValue(string $key)
    {

    }

    public function deleteValue(string $key)
    {

    }

    private function hash(string $key): int
    {
        return mb_strlen($key); // test
    }
}
