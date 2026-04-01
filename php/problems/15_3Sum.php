<?php

class Solution {

    /**
     * @param int[] $nums
     * @return int[][]
     */
    function threeSum($nums) {
        $length = count($nums);
        $resultSet = [];
        $i = 0;

        for ($i = 0; $i < $length; ++$i) {
            $target = -$nums[$i];
            $jSet = [];

            for ($j = $i + 1; $j < $length; ++$j) {
                $third = $target - $nums[$j];

                if (isset($jSet[$third])) {
                    $arr = [$nums[$i], $nums[$j], $third];
                    sort($arr);
                    $key = $arr[0] . '_' . $arr[1] . '_' . $arr[2];

                    if (!isset($resultSet[$key])) {
                        $resultSet[$key] = $arr;
                    }
                }

                $jSet[$nums[$j]] = true;
            }
        }

        return $resultSet;
    }
}

$testArr = [-1,0,1,2,-1,-4];

echo count($testArr), "\n";

$solution = new Solution();
$result = $solution->threeSum($testArr);

echo "Result\n";
//print_r($result);
print_r(count($result));
echo "\n";
