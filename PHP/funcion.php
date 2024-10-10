<?php
$mensaje = "Hola, Mundo!";

function mostrarMensaje() {
    global $mensaje;
    echo $mensaje;
}

mostrarMensaje(); // Imprime: Hola, Mundo!
?>