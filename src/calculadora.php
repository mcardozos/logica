<?php

// Exercício 2: Soma de Valores em um Array

// Crie um array contendo os seguintes números: 5, 10, 15, 20, 25.
// 	•	Some todos os valores e exiba o resultado na tela.

$numeros = [5, 10, 15, 20, 25];
$total = 0;

foreach ($numeros as $numero) {
    $total += $numero;
    // $total = $total + $numero;
}

echo "A soma dos números é: $total";