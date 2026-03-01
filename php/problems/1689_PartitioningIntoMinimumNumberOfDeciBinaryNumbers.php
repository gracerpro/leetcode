<?php

class Solution {

    /**
     * @param String $n
     * @return Integer
     */
    function minPartitions($n) {
        $maxDigit = 0;
        $length = strlen($n);

        for ($i = 0; $i < $length; ++$i) {
            $digit = (int)$n[$i];

            if ($digit > $maxDigit) {
                $maxDigit = $digit;

                if ($digit === 9) {
                    break;
                }
            }
        }

        return $maxDigit;
    }
}
