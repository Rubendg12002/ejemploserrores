<?php
// Rol del usuario (cambiar a "admin" para probar acceso permitido)
$role = "admin";

if($role === "admin"){
    echo "<h3>Acceso concedido al panel de administración</h3>";
} else {
    echo "<h3>Acceso denegado</h3>";
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

