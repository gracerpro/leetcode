<?php

class Solution {

    /**
     * @param int[] $arr
     * @return int[]
     */
    function sortByBits($arr) {
        usort($arr, function($a, $b) {
            $a1 = $this->countBits($a);
            $b1 = $this->countBits($b);

            if ($a1 === $b1) {
                if ($a === $b) {
                    return 0;
                }
                return $a < $b ? -1 : 1;
            }

            return $a1 < $b1 ? -1 : 1;
        });

        return $arr;
    }

    function countBits(int $n): int {
        $count = 0;

        while ($n > 0) {
            if ($n & 1) {
                $count++;
            }
            $n = $n >> 1;
        }

        return $count;
    }
}
