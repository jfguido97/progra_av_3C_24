<?php
class Persona {
    public $nombre;
    public $edad;
}

$persona = new Persona();
$persona->nombre = "Juan";
$persona->edad = 25;

echo $persona->nombre;

var_dump($persona);
?>
