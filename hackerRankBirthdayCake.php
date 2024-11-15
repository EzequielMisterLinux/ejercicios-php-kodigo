<?php
/*
 * Complete the 'birthdayCakeCandles' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY candles as parameter.
 */

function birthdayCakeCandles($candles) {
     // Obtiene la altura maxima de las velas
    $maxAltura = max($candles);
    // Cuenta cuantas velas son de la Maxima altura.
    $CountVelas = 0;
    foreach ($candles as $candle) {
        if ($candle == $maxAltura) {
            $CountVelas++;
        }
    }
    return $CountVelas;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$candles_count = intval(trim(fgets(STDIN)));

$candles_temp = rtrim(fgets(STDIN));

$candles = array_map('intval', preg_split('/ /', $candles_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = birthdayCakeCandles($candles);

fwrite($fptr, $result . "\n");

fclose($fptr);

?>