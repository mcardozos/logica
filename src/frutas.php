<?php

// Exercício 1: Manipulação de Arrays Simples

// Crie um array com cinco nomes de frutas e:
// 	1.	Exiba todos os itens do array usando um foreach.
// 	2.	Adicione uma nova fruta ao final do array.
// 	3.	Remova a primeira fruta do array.
// 	4.	Exiba novamente o array atualizado.

$frutas = ["Maçã", "Banana", "Laranja", "Abacaxi", "Uva"];

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}

echo "------------------------------------------<br>";
$frutas[] = "Morango";
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}

echo "------------------------------------------<br>";
array_shift($frutas);//REMOVE O PRIMEIRO ELEMENTO DO ARRAY
unset($frutas[1]);//REMOVE O ELEMENTO ATRAVÉS DO INDICE

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}