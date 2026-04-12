<?php

enum Face: string {
    case North = 'North';
    case East = 'East';
    case South = 'South';
    case West = 'West';
}

class Robot {
    private int $width;
    private int $height;

    private $isSteped = false;
    private int $index = 0;
    private array $positions = [];

    /**
     * @param int $width
     * @param int $height
     */
    function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;

        for ($i = 0; $i < $width; ++$i) {
            $this->positions[] = [$i, 0];
        }
        for ($i = 1; $i < $height; ++$i) {
            $this->positions[] = [$width - 1, $i];
        }
        for ($i = $width - 2; $i >= 0; --$i) {
            $this->positions[] = [$i, $height - 1];
        }
        for ($i = $height - 2; $i > 0; --$i) {
            $this->positions[] = [0, $i];
        }
    }

    /**
     * @param int $num
     * @return NULL
     */
    function step($num) {
        $this->isSteped = true;
        $this->index = ($this->index + $num) % count($this->positions);
    }

    /**
     * @return Integer[]
     */
    function getPos() {
        return $this->positions[$this->index];
    }

    /**
     * @return String
     */
    function getDir() {
        if ($this->isSteped === false) {
            return Face::East->value;
        }

        $pos = $this->getPos();

        if ($pos[0] > 0 && $pos[1] === 0) {
            return Face::East->value;
        }
        if ($pos[0] === $this->width - 1 && $pos[1] > 0) {
            return Face::North->value;
        }
        if ($pos[0] < $this->width - 1 && $pos[1] === $this->height - 1) {
            return Face::West->value;
        }

        return Face::South->value;
    }
}

/**
 * Your Robot object will be instantiated and called as such:
 * $obj = Robot($width, $height);
 * $obj->step($num);
 * $ret_2 = $obj->getPos();
 * $ret_3 = $obj->getDir();
 */

$obj = new Robot(6, 3);
$obj->step(2);
$obj->step(2);
$ret_2 = $obj->getPos();
$ret_3 = $obj->getDir();
$obj->step(2);
$obj->step(1);
$obj->step(4);
$ret_2 = $obj->getPos();
$ret_3 = $obj->getDir();

var_dump($ret_2);
var_dump($ret_3);
