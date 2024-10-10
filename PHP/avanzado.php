<?php
$producto = "Laptop";
$precio = 1200.50;
$disponible = true;
$cantidad = 10;
$descuento = null; // variable sin valor (NULL)

echo "Producto: $producto";
echo "Precio: $precio";
echo "Disponible: " . ($disponible ? "Sí" : "No") . "";
echo "Cantidad en stock: $cantidad";
echo "Descuento: " . ($descuento ?? "No disponible") . "";
?>
