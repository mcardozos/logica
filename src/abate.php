<?php

$array_simples = array('azul', 'vermelho', 'verde', 'amarelo', 'preto', 'branco');

foreach ($array_simples as $key => $value) {
 
    if($key == 4) {
        echo $key . ' => ' . $value . '<br>';
    }
 
}

die();


$lista_abate = array(
    array(
        "produtor" => "João",
        "tipo" => "Vaca",
        "peso_a" => 150,
        "peso_b" => 200,
    ),
    array(
        "produtor" => "Pedro",
        "tipo" => "Boi",
        "peso_a" => 130,
        "peso_b" => 180,
    ),
    array(
        "produtor" => "Alberto",
        "tipo" => "Garrote",
        "peso_a" => 40,
        "peso_b" => 70,
    ),
    array(
        "produtor" => "Roberto",
        "tipo" => "Toro",
        "peso_a" => 210,
        "peso_b" => 220,
    ),
);

$valor_arroba = 320.45;
$arroba = 15;


foreach ($lista_abate as $value) {
    $arroba_animal = ($value['peso_a'] + $value['peso_b']) / $arroba;
    $valor_arroba_animal = $arroba_animal * $valor_arroba;
    echo "O valor a pagar ao produtor " . $value['produtor'] . " é de R$ " . number_format($valor_arroba_animal, 2, ',', '.') . "<br>";
}





// $arroba_animal = ($peso_a + $peso_b)/$arroba;
// $valor_arroba_animal = $arroba_animal * $valor_arroba;

// echo "O valor a pagar ao produtor " . $produtor . " é de R$ ". number_format($valor_arroba_animal, 2, ',', '.'); 
