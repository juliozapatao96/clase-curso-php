<?php


use Carpeta1\Humano;
use Models\Course; //solo es necesario en casos de conflictos con nombres de clases

spl_autoload_register(function($clase){
    if(file_exists(str_replace('\\','/', $clase) . '.php')){
        require_once str_replace('\\','/', $clase) . '.php';
    }
});


$humano2 = new Course;
$humano2->saludar();

echo "<br>";

$humano = new Humano;
$humano->saludar();


// final -> es una palabra reservada para aplicar a clases o métodos

?>