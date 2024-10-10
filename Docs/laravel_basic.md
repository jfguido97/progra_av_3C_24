# Guia Basica Laravel

Laravel es un framework PHP robusto y popular para el desarrollo de aplicaciones web. Su sintaxis elegante y las herramientas integradas lo hacen ideal para proyectos de todo tipo, desde pequeños sitios web hasta grandes aplicaciones empresariales.

## 1. ¿Qué es Laravel?
Laravel es un framework PHP de código abierto, diseñado para facilitar el desarrollo web. Utiliza el patrón de arquitectura MVC (Modelo-Vista-Controlador) y proporciona una gran cantidad de características como el enrutamiento, la autenticación, la gestión de bases de datos, y más.

## 2. Requisitos previos
Antes de empezar a trabajar con Laravel, asegúrate de tener lo siguiente instalado:

* PHP 8.1 o superior
* Composer (Administrador de dependencias de PHP)
* MySQL o cualquier otro sistema de bases de datos compatible (Laravel soporta muchos motores de bases de datos)
* Servidor web como Apache o Nginx

## 3. Instalación de Laravel
### a. Instalación de Composer
Si aún no tienes Composer, instálalo desde [aquí](https://getcomposer.org/).

### b. Crear un nuevo proyecto Laravel
Una vez que tengas Composer instalado, puedes crear un nuevo proyecto Laravel usando el siguiente comando:

```bash
composer create-project --prefer-dist laravel/laravel nombre-de-tu-proyecto
```
### c. Iniciar el servidor de desarrollo
Navega al directorio del proyecto y levanta el servidor de desarrollo de Laravel con el siguiente comando:

```bash
cd nombre-de-tu-proyecto
php artisan serve
```
Esto levantará el servidor de desarrollo en http://localhost:8000.

## 4. Estructura de directorios de Laravel
La estructura de directorios de Laravel sigue el patrón MVC:

* app/: Contiene el código de tu aplicación.

  * Http/: Aquí se encuentran los controladores y middleware.
  * Models/: Define los modelos de la aplicación.
* routes/: Contiene los archivos de rutas (como web.php y api.php).

* resources/: Contiene las vistas y archivos estáticos como CSS y JavaScript.

* config/: Archivos de configuración de la aplicación.

* database/: Migraciones, seeds y archivos relacionados con la base de datos.

* public/: Carpeta pública donde residen los archivos accesibles públicamente (como imágenes y archivos CSS).

## 5. Rutas en Laravel
Las rutas en Laravel definen cómo las solicitudes HTTP deben ser manejadas por tu aplicación. Las rutas se definen en los archivos dentro de routes/, siendo el más común web.php.

Ejemplo básico de ruta:
```php
// routes/web.php
Route::get('/', function () {
    return "¡Hola, Mundo!";
});
```
Ruta con un controlador:
```php
Route::get('/usuarios', [UsuarioController::class, 'index']);
```
## 6. Controladores
Los controladores en Laravel manejan la lógica de tu aplicación. Se pueden crear utilizando el comando Artisan:

```bash
php artisan make:controller UsuarioController
```
Un controlador básico puede verse así:

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index() {
        return "Listado de usuarios";
    }
}
```
## 7. Vistas
Las vistas en Laravel utilizan Blade, el motor de plantillas predeterminado. Los archivos Blade tienen la extensión .blade.php y se almacenan en el directorio resources/views/.

Crear una vista:
```php
<!-- resources/views/bienvenida.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Mi App</title>
</head>
<body>
    <h1>Bienvenido a mi aplicación Laravel</h1>
</body>
</html>
```
Mostrar la vista desde una ruta:
```php
Route::get('/', function () {
    return view('bienvenida');
});
```
8. Migraciones y bases de datos
Laravel proporciona migraciones para crear y modificar tablas en la base de datos.

Configurar la base de datos
En el archivo .env, configura las credenciales de tu base de datos:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_base_datos
DB_USERNAME=usuario
DB_PASSWORD=contraseña
```

Crear una migración
Para crear una migración, usa Artisan:

```bash
php artisan make:migration crear_usuarios
```
Esto generará un archivo de migración en el directorio database/migrations/. Puedes definir las columnas de la tabla en el método up:

```php
public function up()
{
    Schema::create('usuarios', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('email')->unique();
        $table->timestamps();
    });
}
```
Ejecutar migraciones
Para ejecutar todas las migraciones pendientes, utiliza:

```bash
php artisan migrate
```
## 9. Eloquent ORM (Modelos)
Laravel utiliza Eloquent, su propio ORM (Object-Relational Mapping) para trabajar con bases de datos. Cada modelo representa una tabla de la base de datos.

Crear un modelo:
```bash
php artisan make:model Usuario
```
Esto creará un modelo en app/Models/Usuario.php. Eloquent asume que la tabla correspondiente al modelo será usuarios, pero puedes especificar otra si es necesario.

Uso básico de un modelo:
```php
use App\Models\Usuario;

$usuarios = Usuario::all();  // Obtener todos los usuarios
$usuario = Usuario::find(1); // Obtener un usuario por ID
```
## 10. Formularios y validación
Laravel tiene herramientas integradas para manejar formularios y validación de datos.

Ejemplo de validación:
```php
public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|max:255',
        'email' => 'required|email|unique:usuarios',
    ]);

    // Código para guardar el usuario...
}
```
## 11. Autenticación
Laravel incluye un sistema de autenticación integrado. Puedes generar el scaffolding para el registro e inicio de sesión con el siguiente comando:

```bash
composer require laravel/ui
php artisan ui vue --auth
npm install && npm run dev
```
Esto generará las rutas, controladores y vistas para la autenticación de usuarios.

## 12. Artisan: La línea de comandos de Laravel
Artisan es la herramienta CLI de Laravel que te permite realizar varias tareas relacionadas con tu aplicación.

Algunos comandos útiles de Artisan:
Ver todas las rutas disponibles:

```bash
php artisan route:list
```
Limpiar cachés:

```bash
php artisan cache:clear
```
Correr tests:

```bash
php artisan test
```
## 13. Middleware
El middleware en Laravel actúa como una capa entre la solicitud y la respuesta. Puedes crear un middleware con:

```bash
php artisan make:middleware VerificarEdad
```
Luego, puedes usarlo para controlar el acceso a rutas basadas en condiciones como la edad del usuario.

## 14. Despliegue de Laravel
Para el despliegue en producción, asegúrate de seguir estos pasos:

Configura el entorno (.env): Ajusta las variables de entorno a tu servidor.

Generar un APP_KEY:

```bash
php artisan key:generate
```
Optimiza la aplicación:

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```
Configura un servidor web (como Apache o Nginx) apuntando al directorio public/ de tu aplicación.

## 15. Conclusión
Laravel es un framework poderoso y flexible que simplifica el desarrollo de aplicaciones web. Esta guía te ofrece una introducción a sus conceptos fundamentales. A medida que te familiarices más con Laravel, podrás aprovechar funcionalidades avanzadas como colas, eventos, trabajos programados, notificaciones, entre otras.






