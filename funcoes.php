<?php
function fatorial($n) {
    
    if ($n <= 1) {
        return 1;
    } else {
        return $n * fatorial($n - 1);
    }
}

echo fatorial(5); // Saída: 120
