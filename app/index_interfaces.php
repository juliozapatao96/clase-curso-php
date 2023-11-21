<?php

// Herencia:

// A diferencia de Java, PHP admite la herencia múltiple de clases.
// Interfaces y Traits:

// PHP admite interfaces al igual que Java, pero también introduce traits, que son unidades de comportamiento que pueden ser reutilizadas en varias clases.


//En una interfaz, no se puede definir la implementación de los métodos; solo se especifican las firmas.



// Visibilidad:

// Todos los métodos en una interfaz son automáticamente públicos y abstractos.
// Las constantes definidas en una interfaz son implícitamente públicas, estáticas y finales.


// SOLO PODEMOS DEFINIR MÉTODOS PUBLICOS

interface a {
    public function prueba1();
}

interface b {
    public function prueba2();
}

interface c extends a,b {
    public function prueba3();
}

class d implements c {
    public function prueba1(){

    }

    public function prueba2(){
        
    }

    public function prueba3(){
        
    }
}

?>