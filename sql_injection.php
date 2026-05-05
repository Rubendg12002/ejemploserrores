<?php
// Ejemplo de entrada del usuario
$userInput = "1 OR 1=1";

// Consulta vulnerable (solo demostración, sin ejecutar realmente en DB)
echo "<h3>Consulta vulnerable:</h3>";
echo "SELECT * FROM users WHERE id = $userInput";

// Consulta segura usando PDO
echo "<h3>Consulta segura (parametrizada con PDO):</h3>";
echo "SELECT * FROM users WHERE id = :id";


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>