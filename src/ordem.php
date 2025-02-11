<?php
// Crie um array com números aleatórios e:
// 1.	Exiba os números na ordem original.
// 2.	Ordene o array em ordem crescente e exiba novamente.
// 3.	Ordene o array em ordem decrescente e exiba novamente.


$numeros = [15, 10, 35, 20, 18, 30, 5, 60, 45, 40];

echo "Números na ordem original: <br>";
$num_seq =  implode("-", $numeros);
echo $num_seq;

echo "<br><br>Números em ordem crescente: <br>";
sort($numeros);
$num_order = implode(", ", $numeros);
echo $num_order;

echo "<br><br>Números em ordem decrescente: <br>";
rsort($numeros);
$num_order_dec = implode(", ", $numeros);
echo $num_order_dec;
