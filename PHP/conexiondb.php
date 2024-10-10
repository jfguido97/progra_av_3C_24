<?php
// Parámetros de conexión
$host = "localhost";
$port = "5432";
$dbname = "test_bd";
$user = "postgres";
$password = "12345";

// Crear la cadena de conexión
$conn_string = "host=$host port=$port dbname=$dbname user=$user password=$password";

// Establecer la conexión
$conn = pg_connect($conn_string);

if (!$conn) {
    echo "Error: No se pudo conectar a la base de datos.\n";
} else {
    echo "Conexión exitosa.\n";
}


$query = "select * from usuario";
$result = pg_query($conn, $query);

if (!$result) {
    echo "Error en la consulta.\n";
    exit;
}

// Procesar los resultados
while ($row = pg_fetch_assoc($result)) {
    echo $row['id'] . " - " . $row['nombre'] . "\n";
}

// Cerrar la conexión
pg_close($conn);


?>
