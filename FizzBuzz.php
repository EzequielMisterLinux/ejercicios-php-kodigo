<?php

class Solution {
    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n) {
        $res = array();
        
        for ($i = 1; $i <= $n; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                $res[] = "FizzBuzz";
            } else if ($i % 3 == 0) {
                $res[] = "Fizz";
            } else if ($i % 5 == 0) {
                $res[] = "Buzz";
            } else {
                $res[] = (string)$i;
            }
        }
        
        return $res;
    }
}

?>