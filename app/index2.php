<?php
require_once __DIR__ . '/vendor/autoload.php';

# print("Hola Mundo"); 

#variables 
$name = "Julio Zapata";

#constantes
define('NOMBRE', "Natalia Machado");

function saludar($name){
    echo "Hola mundo, desde function-echo : " . $name ;
    echo "<br>";
    print("Hola mundo, desde function-print ". NOMBRE);
    echo "<br>";
}

saludar($name);

echo "Mi versión de PHP es : ". PHP_VERSION;

# estructuras condicionales

/*

    if(...){

    }elseif(...){

    }else{

    }

*/

# Operador ternario
[$a, $b] = [10, 10]; # ó list($a, $b) = array(10, 5);

echo "<br>";
$valor = $a > $b ? "Mayor a" : ($a < $b ? 'Menor a': 'Igual');
echo $valor;

# switch case

/* 

    switch ($variable) {
        case 'value':
            # code...
            break;
        
        default:
            # code...
            break;
}

*/

# match
echo "<br>";
$day_code = 1;

echo match ($day_code ) {
    1 => "Lunes",
    2 => "Martes",
    default => "Ingrese un número bien ome"
};


# while

/*

    while ($a <= 10) {
        # code...
    }

*/

#  do while

/*

    do {
        # code...
    } while ($a <= 10);

*/

# for y for each

/*

    for (inicialización; condición; incremento) {
        // Código a ejecutar en cada iteración
    }

*/

echo "<br>";

for ($i = 0; $i < 5; $i++) {
    echo $i . "<br>";
}
/*
    foreach ($array as $valor) {
        // Código a ejecutar en cada iteración
    }
*/
$colores = array("rojo", "verde", "azul");

foreach ($colores as $color) {
    echo $color . "<br>";
}

// breaks y continue

/*

    for ($i = 0; $i < 10; $i++) {
        if ($i == 5) {
            break; // Salir del bucle cuando $i es igual a 5
        }
        echo $i . "\n";
    }

    for ($i = 0; $i < 5; $i++) {
        if ($i == 2) {
            continue; // Omitir la iteración cuando $i es igual a 2, por lo tanto omite las lineas que continuan y pasa con el siguiente ciclo
        }
        echo $i . "\n";
    }


*/

# funciones PHP

// echo "<br>";
// echo "Marca de tiempo : ". time() . "<br";

// rand() -> números aleatorios -- sqrt() -> raíz cuadrada

function factorial($n) {
    $resultado = 1;
    
    for ($i = 2; $i <= $n; $i++) {
        $resultado *= $i;
    }

    return $resultado;
}

// Ejemplo de uso
$numero = 5;
echo "El factorial de numero es: " . factorial($numero);

echo "<br>";
// implementación recursiva

/*
    La implementación recursiva de la función factorial en PHP sigue el concepto general de la recursividad.
    La idea es que la función se llame a sí misma con argumentos reducidos hasta que se alcanza un caso base,
    donde la función devuelve un valor sin hacer una llamada recursiva adicional.

*/

function factorial_rec($n) {
    // Caso base: si $n es 0 o 1, el factorial es 1.
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        // Caso recursivo: calcular el factorial de ($n - 1) y multiplicarlo por $n.
        return $n * factorial_rec($n - 1);
    }
}


// Ejemplo de uso
$numero = 5;
echo "El factorial (imp rec) de $numero es: " . factorial_rec($numero);


# ambitos de las variables

// global $variable;

// pasar una variable por referencia

// function (& $variable){
// variable se pasa como si fuera global
// }

# función con argumentos fijos

// function valoracion ($name, $rating=5){...}

// function concatenar (...$lista_palabras){...} //cuando no sabesmo cuántos parámetros se van a pasar entonces se pone ...

# funciones con tipado definido

// function sumarEnteros(int $entero1, int $entero2){...}

// se puede pasar floats a la funcion anterior, para evitar esto se usa

// declare(strict_types=1)

function sumarEnteros(int $entero1, int $entero2): int | float // indica que debe retornar un int o float
{
    return ($entero1 + $entero2)/2;
}

## cadenas de caracteres

    // strlen() # retorna la cantidad de bytes ocupados por el string
    // mb_strlen() # retonar cantidad de caracteres
    // strpos($string, 'carácter'); # retorna el index del caracter buscado (primer coincidencia)
    // str_contains($string, 'palabra_a_buscar') # Retorna 1 o 0
    // strcmp($string1, $string2) # Retorna 0 si son iguales
    // str_replace("palabra a reemplazar", "remplazo", $string)
    // strtolower($string)
    // strtoupper($string)
    // ...

## Arrays
echo "<br>";
$array_unidimensional = [10, "Hola", true, 5.5];
echo $array_unidimensional[0];
$array_nombres = [
    "nombre" => "Julio Zapata",
    "email" => "julio.zapatao@udea.edu.co"
];
echo "<br>";
echo $array_nombres["email"];


# arrays multidimensionales

$data = [
    [
        "nombre" => "Julio Zapata",
        "email" => "julio.zapatao@udea.edu.co"
    ],
    [
        "nombre" => "Andrés Julián",
        "email" => "andres@udea.edu.co"
    ],
    [
        "nombre" => "Liam Mathias",
        "email" => "liam@udea.edu.co"
    ]
];
echo "<br>";
echo $data[2]["nombre"];

echo "<hr>";
foreach($data as $item){
    echo $item['nombre'] . "<br>";
    echo $item['email'] . "<br>";
    echo "<hr>";
}




# funciones para arrays

[$a, $b] = [10, 10]; # ó list($a, $b) = array(10, 5);

$array = range(10,20);

// var_dump($array);

// count($array);
// in_arrray(valor_a_buscar, $array) # retorna un 1 o 0
// unset($array[index]) // elimina el elemento ubicado en index para el array








?>