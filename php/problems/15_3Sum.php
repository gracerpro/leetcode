<?php

class Solution {

    /**
     * @param int[] $nums
     * @return int[][]
     */
    function threeSum($nums) {
        $length = count($nums);
        $resultArr = [];
        $i = 0;

        while ($i < $length - 2) {
            $j = $i + 1;

            while ($j < $length - 1) {
                $k = $j + 1;

                while ($k < $length) {
                    if ($nums[$i] + $nums[$j] + $nums[$k] === 0) {
                        $arr = [$nums[$i], $nums[$j], $nums[$k]];
                        sort($arr);
                        $key = $arr[0] . '_'. $arr[1] . '_' . $arr[2];

                        if (!isset($resultArr[$key])) {
                            $resultArr[$key] = $arr;
                        }
                    }
                    $k++;
                }
                $j++;
            }
            $i++;
        }

        return $resultArr;
    }
}

$testArr = [-1,0,1,2,-1,-4];

echo count($testArr), "\n";

$solution = new Solution();
//$result = $solution->threeSum($testArr);

//print_r(count($result));
echo "\n";
