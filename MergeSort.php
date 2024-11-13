<?php

function mergeSort($array) {
    if (count($array) <= 1) {
        return $array;
    }

    $middle = count($array) / 2;
    $left = array_slice($array, 0, $middle);
    $right = array_slice($array, $middle);

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge($left, $right) {
    $result = [];
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] <= $right[0]) {
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }

    return array_merge($result, $left, $right);
}

// Ejemplo de uso
$array = [55, 23, 78, 12, 34, 89, 1, 45];
echo "Arreglo original: " . implode(", ", $array) . "\n";

$sortedArray = mergeSort($array);
echo "Arreglo ordenado: " . implode(", ", $sortedArray) . "\n";

?>