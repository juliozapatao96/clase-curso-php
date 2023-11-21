<?php


class Persona {
    public $nombre, $edad;
    public $apellido1, $apellido2;


    public function setNombre($nombre){
        $this->nombre = strtolower($nombre);
    }

    public function getNombre(){
        return ucwords($this->nombre);
    }

    public function setApellidos($apellido1, $apellido2){
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
    }

    public function getApellidos(){
        return $this->apellido1 . " " . $this->apellido2;
    }
}

// se usan trait para tratar de simular la herencia de multiples
// clases padres

// principal diferencia entre un trait y una clase es que
// un trait no se puede instanciar

trait hola{
    public function decirHola(){
        echo "hola";
        echo "<br>";
    }

    public function saludoLatinoamericano(){
        echo "Este es un saludo  desde trait Hola";
        echo "<br>";
    }

    protected function saludo(){
        echo "Hola mundo desde trait hola";
        echo "<br>";
    }
}

trait Latinoamericano{
    // sobreescribe cualquier metodo de la clase padre que contenga
    // un mismo método con el mismo nombre
    public function saludoLatinoamericano(){
        echo "Este es un saludo desde trait Latinoamericano";
        echo "<br>";
    }
}

trait Europeo{
    public function saludoEuropeo(){
        echo "Este es un saludo desde trait europeo";
        echo "<br>";
    }

    abstract public function saludar_mult();
}

// se pueden usar traits compuestos de otros traits
trait MultipleNacionalidad {
    use Latinoamericano, Europeo;

    public function saludar_mult(){
        echo "saludo multiple : <br>";
        $this->saludoLatinoamericano();
        $this->saludoEuropeo();

    }
}

class Peruano extends Persona{ // herencia de Persona
    use Latinoamericano, hola{
        hola::saludoLatinoamericano insteadOf Latinoamericano;
        saludo as public; //modificar la visibilidad del método
    } // se pueden usar varios traits dentro de la misma clase

    // con hola::saludoLatinoamericano insteadOf Latinoamericano;
    // lo que se quiere decir es que se desea usar el método de hola en lugar del trait Latinoamericano

    // Sin embargo. si acá existe un método con el mismo nombre que el trait
    // entonces, este sobre escribe todo y ejecuta el que esté contenido en la clase hija

}

class Chileno extends Persona{
    use Europeo;
    public function saludar_mult(){

    }

}

class Suizo extends Persona{
    use MultipleNacionalidad;
}


$peruano = new Peruano;

$peruano->saludoLatinoamericano();
$peruano->decirHola();
$peruano->saludo();

$suizo = new Suizo;

$suizo->saludoEuropeo();
$suizo->saludoLatinoamericano();
$suizo->saludar_mult();


?>