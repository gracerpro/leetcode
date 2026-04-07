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

    /**
     * @param int $width
     * @param int $height
     */
    function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
        $this->position = [0, 0];
        $this->face = Face::East;
    }

    /**
     * @param Integer $num
     * @return NULL
     */
    function step($num) {
        for ($i = 0; $i < $num; ++$i) {
            $this->privateStep();
        }
    }

    private function privateStep()
    {
        $tmpX = $this->position[0];
        $tmpY = $this->position[1];

        switch ($this->face) {
            case Face::East:
                $tmpX += 1;
                break;
            case Face::West:
                $tmpX -= 1;
                break;
            case Face::North:
                $tmpY += 1;
                break;
            case Face::South:
                $tmpY -= 1;
                break;
        }

        static $faceMap = [
            Face::East->value => Face::North,
            Face::North->value => Face::West,
            Face::West->value => Face::South,
            Face::South->value => Face::East,
        ];

        if ($tmpX < 0 || $tmpX >= $this->width) {
            $this->face = $faceMap[$this->face->value];

            return $this->privateStep();
        }
        if ($tmpY < 0 || $tmpY >= $this->height) {
            $this->face = $faceMap[$this->face->value];

            return $this->privateStep();
        }

        $this->position[0] = $tmpX;
        $this->position[1] = $tmpY;
    }

    /**
     * @return Integer[]
     */
    function getPos() {
        return $this->position;
    }

    /**
     * @return String
     */
    function getDir() {
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
