<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        $left = 0;
        $right = count($nums) - 1;
    
        while ($left <= $right) {
            $middle = $left + floor(($right - $left) / 2);  

            if ($nums[$middle] == $target) {
                return $middle;
            } elseif ($nums[$middle] < $target) { 
                $left = $middle + 1;
            } else {
                $right = $middle - 1;
            }
        }
    
        return -1;
    }
}

?>
