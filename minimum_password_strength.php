<?php
/*
 * Complete the 'minimumNumber' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 * 1. INTEGER n
 * 2. STRING password
 */

function minimumNumber($n, $password) {
    $numbers = "0123456789";
    $lower_case = "abcdefghijklmnopqrstuvwxyz";
    $upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $special_characters = "!@#$%^&*()-+";
    
    $has_digit = false;
    $has_lower = false;
    $has_upper = false;
    $has_special = false;
    
    // Revisar cada carácter de la contraseña
    for ($i = 0; $i < strlen($password); $i++) {
        $c = $password[$i];
        if (ctype_digit($c)) {
            $has_digit = true;
        } elseif (ctype_lower($c)) {
            $has_lower = true;
        } elseif (ctype_upper($c)) {
            $has_upper = true;
        } elseif (strpos($special_characters, $c) !== false) {
            $has_special = true;
        }
    }
    
    // Contar tipos faltantes
    $missing_types = 0;
    if (!$has_digit) $missing_types++;
    if (!$has_lower) $missing_types++;
    if (!$has_upper) $missing_types++;
    if (!$has_special) $missing_types++;
    
    // Calcular caracteres necesarios
    $characters_needed = max($missing_types, 6 - $n);
    
    return $characters_needed;
}

// Leer la entrada
$n = intval(trim(fgets(STDIN)));
$password = trim(fgets(STDIN));

// Calcular y mostrar el resultado
$answer = minimumNumber($n, $password);
echo $answer . "\n";
?>