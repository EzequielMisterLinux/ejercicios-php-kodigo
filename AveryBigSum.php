<?php

/*
 * Complete the 'aVeryBigSum' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts LONG_INTEGER_ARRAY ar as parameter.
 */

function aVeryBigSum($ar) {
    // Initialize sum as 0
    $sum = 0;
    
    // Iterate through the array and add each element to sum
    foreach ($ar as $num) {
        // PHP will automatically handle the conversion to float if necessary
        $sum += $num;
    }
    
    return $sum;
}

// Read input
$fptr = fopen("php://stdout", "w");

$ar_count = intval(trim(fgets(STDIN)));

$ar_temp = rtrim(fgets(STDIN));
$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = aVeryBigSum($ar);

fwrite($fptr, $result . "\n");

fclose($fptr);
?>