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

        sort($nums);

        for ($i = 0; $i < $length; ++$i) {
            if ($i > 0 && $nums[$i] === $nums[$i - 1]) {
                continue;
            }
            $j = $i + 1;
            $k = $length - 1;

            while ($j < $k) {
                $sum = $nums[$i] + $nums[$j] + $nums[$k];

                if ($sum < 0) {
                    $j++;
                } else if ($sum > 0) {
                    $k--;
                } else {
                    $arr = [$nums[$i], $nums[$j], $nums[$k]];
                    sort($arr);
                    $key = $arr[0] . '_' . $arr[1] . '_' . $arr[2];

                    if (!isset($resultSet[$key])) {
                        $resultSet[$key] = $arr;
                    }

                    $j++;
                    $k--;

                    while($j < $k && $nums[$j] == $nums[$j - 1]) {
                        $j++;
                    }
                }
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
