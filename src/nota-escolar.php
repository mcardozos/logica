<?php

//Crie um aplicativo que leia as notas de um aluno nos quatro bimestres
// calcule a media e se o aluno teve nova maior ou igual a 7 aprovado
// se teve nota menor que 7 reprovado

$aluno = "Zé";
$nota1 = 8;
$nota2 = 8;
$nota3 = 6;
$nota4 = 7;

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

if ($media >= 7) {
    echo $aluno . ", você foi aprovado com média " . $media;
} else if ($media < 7 && $media >= 5) {
    echo $aluno . ", você está em recuperação com média " . $media;
} else {
    echo $aluno . ", você foi reprovado com média " . $media;
}