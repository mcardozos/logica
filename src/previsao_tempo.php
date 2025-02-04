<?php

//Crie uma logica que a partir da temperatura me diga 
//se o dia está ensolarado, nublado.

//Se a temperatura for maior ou igual a 30 graus, o dia está ensolarado.
//Se menor de 30 graus, o dia está nublado.

$temperatura = 20;

if ($temperatura >= 30) {
    echo "O dia está ensolarado";
} else {
    echo "O dia está nublado";
}