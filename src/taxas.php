<?php

// Exercício 5: Conversão de Moedas

// Crie um array associativo com as taxas de conversão de diferentes moedas para reais (R$):
// 	•	Dólar (USD) → 5.10
// 	•	Euro (EUR) → 5.50
// 	•	Libra (GBP) → 6.30
// 	•	Peso Argentino (ARS) → 0.05

$taxas = [
    "USD" => 6.00,
    "EUR" => 5.50,
    "GBP" => 6.30,
    "ARS" => 0.05
];

$valor_real = 100;
echo "<strong>Valor em Reais: R$ $valor_real <br></strong>";
echo "Valor em Dolar: US$ ". number_format($valor_real / $taxas['USD'], 2, ',', '.')  . "<br>";
echo "Valor em Euro: EU$ ". number_format($valor_real / $taxas['EUR'], 2, ',', '.')  . "<br>";
echo "Valor em Libras: GB$ ". number_format($valor_real / $taxas['GBP'], 2, ',', '.')  . "<br>";
echo "Valor em Peso Arg: AR$ ". number_format($valor_real / $taxas['ARS'], 2, ',', '.')  . "<br>";