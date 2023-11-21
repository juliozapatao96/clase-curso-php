<?php

// Debido a que se llama una clase humano dos veces genera conflicto


use Carpeta1\Humano;
use Carpeta2\Humano as Humano2; //solo es necesario en casos de conflictos con nombres de clases

require_once('Carpeta1/Humano.php');
require_once('Carpeta2/Humano.php');

$humano1 = new Humano;
$humano1->saludar();

echo "<br>";

$humano2 = new Humano2;
$humano2->saludar();


?>