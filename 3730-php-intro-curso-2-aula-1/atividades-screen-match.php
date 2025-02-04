<?php

function operacaoMatematica(int $numero1, int $numero2, string $operacao): float
{
    return match($operacao) {
        'soma' => $numero1 + $numero2,
        'subtração' => $numero1 - $numero2,
        'divisão' => $numero1 / $numero2, // Aqui você poderia pensar no caso de divisão por 0 ;-)
        'multiplicação' => $numero1 * $numero2,
    };
}

function calculaImc(float $alturaEmMetros, float $pesoEmQuilos): float
{
    return $pesoEmQuilos / $alturaEmMetros ** 2;
}

function celsiusToFahrenheit(float$celsius): float
{
    return ($celsius * 9 / 5) + 32;
}