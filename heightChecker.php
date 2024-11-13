<?php

class Solution {
    // conteo de posiciones incorrectas
    public function heightChecker($heights) {
        // Crear una copia del arreglo heights y ordenar usando quicksort
        $expected = $this->quickSort($heights);

        $count = 0; //  heights y expected no coinciden
        for ($i = 0; $i < count($heights); $i++) {
            if ($heights[$i] != $expected[$i]) {
                $count++; 
            }
        }

        return $count; // Devuelve el número de índices diferentes
    }

    // quicksort
    private function quickSort($arr) {
        
        if (count($arr) < 2) {
            return $arr;
        }

        // Seleccionar pv
        $pivot = $arr[0];
        $left = [];
        $right = [];

        // Dividir 
        for ($i = 1; $i < count($arr); $i++) {
            if ($arr[$i] < $pivot) {
                $left[] = $arr[$i];
            } else {
                $right[] = $arr[$i];
            }
        }

        // Llamada recursida
        return array_merge($this->quickSort($left), [$pivot], $this->quickSort($right));
    }
}


$solution = new Solution();
$heights = [1, 1, 4, 2, 1, 3];
echo $solution->heightChecker($heights); // prueba da 3


?>