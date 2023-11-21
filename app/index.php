<?php

require_once('clases/Persona.php');

// $persona_1 = new Persona("JulIO", "ZapatA", 35);

// $persona_1->nombre = "Julio";
// $persona_1->apellido = "Zapata";
// $persona_1->edad = 27;

// $persona_1->setNombre("AnDRES JuliAN");

// echo "El nombre de la persona 1 es : " . $persona_1->getNombre() ;

$chileno = new Chileno;

$chileno->setApellidos("Zapata", "Ortiz");

echo $chileno->getApellidos();

echo "<br>";

$peruano = new Peruano;

$peruano->setApellidos("Zapataa", "Ortizz");

echo $peruano->getApellidos();

echo "<br>";

?>