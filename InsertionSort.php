<?php
function insertionSort1($n, $arr) {
    // Store the last element
    $lastElement = $arr[$n-1];
    
    // Start from the second-to-last element and move right
    for ($i = $n-2; $i >= 0; $i--) {
        // If current element is greater than stored element
        if ($arr[$i] > $lastElement) {
            // Shift element to the right
            $arr[$i + 1] = $arr[$i];
            // Print the current state of array
            echo implode(" ", $arr) . "\n";
        } else {
            // Found the correct position, insert the stored element
            $arr[$i + 1] = $lastElement;
            echo implode(" ", $arr) . "\n";
            return;
        }
    }
    
    // If we reach here, lastElement is the smallest
    $arr[0] = $lastElement;
    echo implode(" ", $arr) . "\n";
}

// Read input
$n = intval(trim(fgets(STDIN)));
$arr_temp = rtrim(fgets(STDIN));
$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

insertionSort1($n, $arr);
?>