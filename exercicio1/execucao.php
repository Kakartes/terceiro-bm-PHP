<?php


require_once("modelo/Gato.php");
require_once("modelo/Cachorro.php");

//gato

    $gatin = new Gato();
    $gatin->setNome("Rex");
    $gatin->setRaca("leopardo");
    echo $gatin->getDados() . "\n";
    $gatin->miar();

//cachorro
   
    $cachorin = new Cachorro();
    $cachorin->setNome("leo");
    $cachorin->setRaca("Boiadeiro de Berna");
    echo $cachorin->latir() . "\n";
    $cachorin->latir();

  