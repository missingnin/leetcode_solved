<?php

// ART 12 ms
// AMU 20.4 MB 
class TwoSumSolution {
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $diffMap = [];

        for ($i = 0; $i < count($nums); $i++) {
            $diff = $target - $nums[$i];
            if (array_key_exists($diff, $diffMap)) {
                return [$diffMap[$diff], $i];
            }
            $diffMap[$nums[$i]] = $i;
        }

        return [];
    }
}
