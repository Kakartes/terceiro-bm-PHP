<?php

require_once("modelo/Aluno.php");
require_once("modelo/Professor.php");


//1 aluno

$aluno = new Aluno();

    $aluno->setNome("Rex");
    $aluno->setRg("34246");
    $aluno->setIdade("16");
    $aluno->setMatricula("63565");
echo $aluno . "\n";

//professor

$professor = new Professor("Daniel" , "654375" , "28");

$professor->setSala(1000);
