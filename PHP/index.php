<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Server Example</title>
</head>
<body>
    <h1>Welcome to my PHP Web Server</h1>
    
    <p>This is a basic example of serving an HTML page with PHP using the built-in server.</p>

    <?php
        // Dynamic PHP content
        echo "<p>The current date and time is: " . date("Y-m-d H:i:s") . "</p>";
    ?>

    <h1>Lista de Perros</h1>
    
    <?php
        // Array de perros
        $perros = ["Labrador", "Bulldog", "Beagle", "Golden Retriever", "Pastor Alemán", "Dálmata", "Chihuahua"];

        // Comenzamos la lista no ordenada
        echo "<ul>";
        
        // Recorremos el array de perros y los mostramos en la lista
        foreach ($perros as $perro) {
            echo "<li>$perro</li>";
        }

        // Cerramos la lista
        echo "</ul>";
    ?>

<h1>Detalles de Perros</h1>
    
    <?php
        // Array asociativo de perros con sus detalles
        $perros = [
            ["nombre" => "Rex", "raza" => "Pastor Alemán", "edad" => 5],
            ["nombre" => "Bobby", "raza" => "Beagle", "edad" => 3],
            ["nombre" => "Luna", "raza" => "Labrador", "edad" => 2],
            ["nombre" => "Milo", "raza" => "Bulldog", "edad" => 4],
            ["nombre" => "Daisy", "raza" => "Golden Retriever", "edad" => 1],
        ];

        // Creamos una tabla para mostrar los detalles de los perros
        echo "<table>";
        echo "<tr><th>Nombre</th><th>Raza</th><th>Edad (años)</th></tr>";
        
        // Recorremos el array de perros y mostramos sus detalles en la tabla
        foreach ($perros as $perro) {
            echo "<tr>";
            echo "<td>" . $perro["nombre"] . "</td>";
            echo "<td>" . $perro["raza"] . "</td>";
            echo "<td>" . $perro["edad"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    ?>





</body>
</html>
