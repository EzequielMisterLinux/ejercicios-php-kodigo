<?php

/*
 * Complete the 'marsExploration' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING s as parameter.
 */

function marsExploration($s) {
    // Write your code here
$n = 0;
    for ($i = 0; $i < strlen($s);$i++){
        if ($i % 3 == 1 && $s[$i] != 'O'){
            print_r($n++);
        }
        elseif(($i % 3 == 2 || $i % 3 == 0) && $s[$i] != 'S'){
            print_r($n++);
        }
    }
    echo $n;
    return $n;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$result = marsExploration($s);

fwrite($fptr, $result . "\n");

fclose($fptr);

?>