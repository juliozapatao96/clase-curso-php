<?php


class MyClass{

    // existen 3 formas para declarar atributos
    // public, private y protected

    public $public = "Public";
    protected $protected = "Protected";
    private $private = "Private";

    function printHello(){
        echo $this->public . "<br>";
        echo $this->protected . "<br>";
        echo $this->private . "<br>";
    }

}

$objeto = new MyClass;

echo $objeto->public;
echo "<br>";

$objeto->printHello();


?>