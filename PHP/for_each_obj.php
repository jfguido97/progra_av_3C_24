<?php
$productos = array(
    array("nombre" => "Laptop", "precio" => 800),
    array("nombre" => "Teléfono", "precio" => 500),
    array("nombre" => "Tablet", "precio" => 300)
);

foreach ($productos as $producto) {
    echo "Producto: " . $producto["nombre"] . " - Precio: $" . $producto["precio"] . "\n";
}
?>
