<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function numSteps($s) {
      $stepNum = 0;
      $i = 0;
      $length = strlen($s);

      while ($length > 1) {
        if ($s[$length - 1] === '0') {
            // even
            // div 2
            $s = substr($s, 0, $length - 1);
            --$length;
        } else {
            // odd
            // +1
            $s = $this->add($s);
            $length = strlen($s);
        }

        ++$stepNum;

        if ($i > 1000) {
            break;
        }
        ++$i;
      }

      return $stepNum;
    }

    function add($s) {
        $endIndex = strlen($s) - 1;

        while ($endIndex >= 0) {
            if ($s[$endIndex] === '0') {
                $s[$endIndex] = '1';

                return $s;
            }
            $s[$endIndex] = '0';

            --$endIndex;
        }

        $s = '1' . $s;

        return $s;
    }
}
