<?php

enum Face: string {
    case North = 'North';
    case East = 'East';
    case South = 'South';
    case West = 'West';
}

class Robot {
    private Face $face;
    private int $width;
    private int $height;
    private array $position;

    private int $index;
    private array $positions = [];

    /**
     * @param int $width
     * @param int $height
     */
    function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
        $this->position = [0, 0];
        $this->face = Face::East;

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

        //...
        static $faceMap = [
            Face::East->value => Face::North,
            Face::North->value => Face::West,
            Face::West->value => Face::South,
            Face::South->value => Face::East,
        ];
    }

    /**
     * @param Integer $num
     * @return NULL
     */
    function step($num) {
        return 0; // change self::index
    }

    /**
     * @return Integer[]
     */
    function getPos() {
        return [0, 0]; // dependence by self::index
    }

    /**
     * @return String
     */
    function getDir() {
        // calculate
        return $this->face->value;
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
