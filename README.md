Documentación Técnica: Implementación de Autoload PSR-4 con Composer
1. Título de la experiencia

Implementación de la Carga Automática (Autoload) bajo el Estándar PSR-4 con Composer

2. Tema

Uso de Composer Autoload para la gestión de dependencias y organización de Namespaces en aplicaciones PHP.

3. Objetivos
Comprender y aplicar el estándar PSR-4 para la organización de archivos y clases.
Configurar el archivo composer.json para establecer un mapa de Autoload.
Sustituir include y require manuales usando Composer y Autoload.
Garantizar la correcta instanciación de clases y objetos en el proyecto PHP.
4. Metodología
4.1 Provisión de recursos
Exposición de fundamentos teóricos y conceptos clave del estándar PSR-4.
Videos de autoayuda sobre Autoload en PHP.
Charla de implementación práctica y resolución de dudas.
4.2 Ejecución práctica
4.2.1 Configuración de Composer Autoload
Crear o editar el archivo composer.json con la sección "autoload":
{
    "autoload": {
        "psr-4": {
            "App\\": "src/"
        }
    }
}
"App\\": prefijo de Namespace.
"src/": ruta física donde se encuentran las clases.
Ejecutar en terminal para generar autoload:
composer dump-autoload
Esto crea el archivo vendor/autoload.php.
4.2.2 Refactorización de código
Reemplazar todas las llamadas a include o require por:
require __DIR__ . '/vendor/autoload.php';

use App\Controllers\UserController;

$controller = new UserController();
Utilizar la palabra reservada use para importar clases de sus Namespaces correspondientes.
4.3 Prueba de funcionamiento
Verificar que el sistema instancia correctamente las clases sin errores Class not found.
Probar varias clases de distintos Namespaces para asegurar que la carga automática funciona.
4.4 Documentación y entrega
Repositorio público (GitHub/GitLab) con:
README.md completo.
.gitignore excluyendo vendor/.
Capturas o bloques de código mostrando que el autoload funciona.
5. Guía de instalación
Clonar el proyecto:
git clone https://github.com/usuario/repositorio.git
cd repositorio
Instalar dependencias y generar Autoload:
composer install
composer dump-autoload
6. Estructura de archivos y Namespaces
repositorio/
├─ src/
│  ├─ Controllers/
│  │   └─ UserController.php
│  ├─ Models/
│  │   └─ User.php
├─ vendor/       # Generada automáticamente por Composer
├─ composer.json
├─ README.md
Cada clase debe corresponder a su Namespace y archivo según PSR-4.
7. Ejemplo de código funcional
<?php
require __DIR__ . '/vendor/autoload.php';

use App\Controllers\UserController;
use App\Models\User;

// Instanciación de objetos
$user = new User("Juan");
$controller = new UserController();
$controller->addUser($user);

echo get_class($controller); // App\Controllers\UserController
8. Pruebas de ejecución
Ejecutar el script principal y verificar que no aparecen errores de clases no encontradas.
Confirmar que cada Namespace carga correctamente su clase correspondiente.
Documentar resultados con capturas de pantalla o bloques de código.
9. Conclusiones técnicas
Mantenibilidad: Permite agregar nuevas clases sin modificar archivos de configuración globales.
Eficiencia de memoria: Lazy Loading carga clases solo cuando se necesitan, mejorando el rendimiento.
Estandarización: Seguir PSR-4 facilita la colaboración entre desarrolladores y mejora la comprensión del proyecto.

Ruben Dominguez 8-988-2361
SoftwareVII 
ruben.dominguez1@utp.ac.pa
10. Higiene del repositorio
Incluir archivo .gitignore con al menos:
/vendor/
/*.log
