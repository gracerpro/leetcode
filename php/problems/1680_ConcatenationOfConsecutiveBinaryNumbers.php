<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function concatenatedBinary($n) {
        $binN = '';
        $iterN = 1;
        $modValue = 10 ** 9 + 7;

        // TODO: optimize
        while ($iterN <= $n) {
            $binN .= $this->toBinary($iterN);
            $tmpDecimal = $this->toDecimal($binN) % $modValue;
            $binN = $this->toBinary($tmpDecimal);
            ++$iterN;
        }

        return $this->toDecimal($binN);
    }

    function toDecimal($s) {
        return bindec($s);
    }

    function toBinary($n) {
        return decbin($n);
    }
}
