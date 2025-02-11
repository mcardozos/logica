<?php

//Exercicio 4: Manipulação de Arrays Associativos
// Crie um array associativo com as seguintes informações de alunos:
// •	Nome
// •	Materia
// •	Nota
// 
// Utilize um loop foreach para exibir as informações de cada aluno.
// 
// Baseado na nota, exiba uma mensagem de aprovação ou reprovação.
// 	•	Se a nota for maior ou igual a 7, exiba a mensagem: "Aluno Aprovado".
// 	•	Se a nota for menor que 7, e maior ou igual a 5 exiba a mensagem: "Aluno em recuperação".
// 	•	Se a nota for menor que 5, exiba a mensagem: "Aluno Reprovado".

$alunos = [
    [
        "nome" => "Maria",
        "materia" => "Português",
        "nota" => 8
    ],
    [
        "nome" => "João",
        "materia" => "Matemática",
        "nota" => 4
    ],
    [
        "nome" => "Ana",
        "materia" => "História",
        "nota" => 6
    ],
    [
        "nome" => "Pedro",
        "materia" => "Geografia",
        "nota" => 10
    ],
    [
        "nome" => "Carla",
        "materia" => "Ciências",
        "nota" => 3
    ]
];

foreach ($alunos as $aluno) {
    echo "Nome: " . $aluno["nome"] . "<br>";
    echo "Matéria: " . $aluno["materia"] . "<br>";
    echo "Nota: " . $aluno["nota"] . "<br>";
    
    
    if ($aluno["nota"] >= 7) {
        echo "O aluno está Aprovado";
        echo "<br><br>";
    } else if ($aluno["nota"] >= 5 && $aluno["nota"] < 7) {
        echo " O Aluno está em recuperação";
        echo "<br><br>";
    } else {
        echo "O aluno está Reprovado";
        echo "<br><br>";
    }
}

