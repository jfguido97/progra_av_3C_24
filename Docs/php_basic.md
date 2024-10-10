# Guia basica de PHP


## 1. ¿Qué es PHP?
PHP (Hypertext Preprocessor) es un lenguaje de programación ampliamente utilizado para desarrollar sitios web dinámicos e interactivos. Se ejecuta en el servidor, lo que significa que el código PHP es procesado en el servidor antes de que se envíe al navegador del usuario.


## 2. Cómo empezar con PHP
### a. Instalar un servidor local

Para ejecutar PHP en tu máquina local, necesitarás un servidor como:

* XAMPP (Windows, macOS, Linux)
* MAMP (macOS, Windows)
* WAMP (Windows)
* 
Estos paquetes incluyen Apache (servidor web), MySQL (base de datos) y PHP.

* Se puede utilizar el servidor integrado de PHP con el siguiente comando:


```bash
php -S 0.0.0.0:8000
```


### b. Archivo PHP básico

Los archivos PHP tienen la extensión .php y el código PHP debe estar dentro de etiquetas `<?php ... ?>`.

Ejemplo básico de PHP:

```php
<?php
    echo "¡Hola Mundo!";
?>
```

Este código genera el texto "¡Hola Mundo!" en el navegador.

## 3. Estructura básica de PHP

### a. Comentarios en PHP
Puedes usar comentarios para explicar tu código. Hay dos tipos de comentarios en PHP:

* Comentario de una sola línea:
```php
// Esto es un comentario de una sola línea
```
* Comentario de varias líneas:
```php
/* 
Esto es un comentario
de varias líneas
*/
```
### b. Variables en PHP
Las variables en PHP se definen con el símbolo $, seguidas del nombre de la variable. No es necesario declarar el tipo de la variable.

```php
<?php
  $nombre = "Juan";
  $edad = 25;
  echo "Mi nombre es $nombre y tengo $edad años.";
?>
```
Salida: Mi nombre es Juan y tengo 25 años.

## 4. Tipos de datos en PHP
* String (Cadena de texto):
```php
$texto = "Hola, PHP!";
```
* Integer (Entero):
```php
$numero = 42;
```
* Float (Decimal):
```php
$pi = 3.1416;
```
* Boolean (Booleano):
```php
$isActive = true;
```
* Array (Arreglo):
```php
$frutas = array("manzana", "naranja", "plátano");
```

## 5. Operadores en PHP

### a. Operadores aritméticos
```php
$a = 10;
$b = 5;
echo $a + $b; // Suma
echo $a - $b; // Resta
echo $a * $b; // Multiplicación
echo $a / $b; // División
```
### b. Operadores de comparación
```php
$a == $b;  // Igual
$a != $b;  // Diferente
$a > $b;   // Mayor que
$a < $b;   // Menor que
```
### c. Operadores lógicos
```php
$a && $b;  // AND lógico
$a || $b;  // OR lógico
!$a;       // Negación lógica
```


## 6. Estructuras de control

### a. Condicionales (if/else)

```php
<?php
$edad = 20;
if ($edad >= 18) {
    echo "Eres mayor de edad.";
} else {
    echo "Eres menor de edad.";
}
?>
```

### b. Ciclos
* while:

```php
<?php
$i = 0;
while ($i < 5) {
    echo $i;
    $i++;
}
?>
```
* for:

```php
<?php
for ($i = 0; $i < 5; $i++) {
    echo "El valor de i es: $i <br>";
}
?>
```

* for each:
```php
<?php
$frutas = array("Manzana", "Banana", "Cereza");

foreach ($frutas as $fruta) {
    echo "Fruta: $fruta <br>";
}
?>
```


## 7. Funciones en PHP

Las funciones en PHP permiten agrupar código reutilizable en bloques. Se definen utilizando `function`.

```php
<?php
function saludar($nombre) {
    echo "Hola, $nombre!";
}

saludar("Carlos");  // Llama a la función y pasa el valor "Carlos"
?>
```


## 8. Manejo de formularios
PHP es ampliamente utilizado para procesar formularios HTML. Aquí hay un ejemplo básico:
### a. Formulario HTML:
```html
<form action="procesar.php" method="POST">
  Nombre: <input type="text" name="nombre">
  <input type="submit" value="Enviar">
</form>
```

### b. Procesar el formulario en PHP (`procesar.php`):
```php
<?php
  $nombre = $_POST['nombre'];
  echo "Hola, $nombre!";
?>
```

## 9. Arrays en PHP

### a. Array indexado
```php
<?php
$frutas = array("manzana", "naranja", "plátano");
echo $frutas[1]; // Salida: naranja
?>
```
### b. Array asociativo
```php
<?php
$persona = array("nombre" => "Carlos", "edad" => 30);
echo $persona["nombre"]; // Salida: Carlos
?>
```

## 10. Incluir archivos en PHP
Puedes incluir otros archivos PHP dentro de tu script utilizando `include` o `require`.

```php
<?php
include 'archivo.php';  // Incluye un archivo (si no lo encuentra, sigue ejecutando)
require 'archivo.php';  // Requiere un archivo (si no lo encuentra, detiene la ejecución)
?>
```


## 11. Manejo de errores
En PHP puedes controlar los errores mediante `try` y `catch`.

```php
<?php
try {
    $resultado = 10 / 0;
} catch (Exception $e) {
    echo 'Error: ',  $e->getMessage(), "\n";
}
?>
```


## 12. Conexión a una base de datos

PHP se usa comúnmente para interactuar con bases de datos como MySQL. Aquí tienes un ejemplo básico usando MySQLi:

```php
<?php
$servername = "localhost";
$username = "usuario";
$password = "contraseña";
$dbname = "mi_base_de_datos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$sql = "SELECT id, nombre FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los datos
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Nombre: " . $row["nombre"]. "<br>";
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>
```

## 13. Conclusión

Esta es una guía básica que te ayudará a entender los fundamentos de PHP. Una vez que domines estos conceptos, podrás explorar temas más avanzados como el manejo de sesiones, seguridad en aplicaciones web, y uso de frameworks como Laravel.
