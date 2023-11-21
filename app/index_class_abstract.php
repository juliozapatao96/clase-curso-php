<?php


// Las clases abstractas no pueden ser instanciadas
// solo pueden ser extendidas(heredada) desde otra clase y
// Una clase abstracta puede heredar de una sola clase padre.

//Puede contener tanto métodos abstractos como métodos concretos (métodos con implementación).

//Puedes definir métodos con diferentes niveles de visibilidad (public, protected, private) en una clase abstracta.

abstract class ClaseAbstracta{
    abstract protected function getValor();
    abstract public function valorPrefijo($prefijo);

    public function imprimir(){
        echo $this->getValor();
    }
}

class ClaseConcreta extends ClaseAbstracta{
    protected function getValor(){
        return "Clase concreta";
    }

    public function valorPrefijo($prefijo, $separador = '.'){
        //se puede añadir otros parámetros
        return $prefijo . " Clase concreta";
    }
}


$clase1 = new ClaseConcreta;

$clase1->imprimir();
echo "<br>";
echo $clase1->valorPrefijo("Valor pasado: 123");







// En resumen, las interfaces en PHP son puramente contratos que especifican 
// qué métodos deben ser implementados, mientras que las clases abstractas pueden 
// contener tanto métodos abstractos como métodos concretos y proporcionan cierta
//  implementación. La elección entre interfaces y clases abstractas dependerá de
//   la situación y de los requisitos específicos del diseño.









?>