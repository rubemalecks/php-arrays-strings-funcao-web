<?php


function soma (int $a, int $b){
    $resultado = $a + $b;
    echo ("A soma de $a com $b é {$resultado}");
}

$lista = ['a', 'b', 'c'];

foreach ($lista as $id => $item) {
    echo "[$id] - [$item]" . PHP_EOL;}