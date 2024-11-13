<?php

class Solution {
    function getSquareSum($num) {
        $sum = 0;
        while ($num > 0) {
            $digit = $num % 10;  
            $sum += $digit * $digit;  
            $num = (int)($num / 10);  
        }
        return $sum;
    }

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n) {
        $seenNumbers = [];

        while ($n !== 1 && !isset($seenNumbers[$n])) {
            $seenNumbers[$n] = true;
            $n = $this->getSquareSum($n);
        }

        return $n === 1;
    }
}


?>