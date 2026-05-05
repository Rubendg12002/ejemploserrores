<?php
$password = "12345";

// Contraseña insegura
echo "<h3>Contraseña insegura:</h3>";
echo $password;

// Contraseña segura usando hash SHA-256
$hashedPassword = hash("sha256", $password);
echo "<h3>Contraseña segura (SHA-256):</h3>";
echo $hashedPassword;


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>