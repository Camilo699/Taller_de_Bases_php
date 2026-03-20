<?php
// Configuración para el  acceso 
$dbhost = "localhost";    // servidor
$dbuser = "root";         // Usuario por defecto
$dbpass = "";             // En XAMPP la clave suele estar vacía
$dbname = "tienda";       // El nombre que definiste en tu SQL

try {
    // Creamos la conexión usando PDO
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8mb4", $dbuser, $dbpass);
    
    // Configuración para manejar errores
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Opcional: Descomenta la siguiente línea para probar si funciona
    // echo "Conexión establecida con la base de datos: " . $dbname;

} catch (PDOException $e) {
    die("Error crítico de conexión: " . $e->getMessage());
}
?>
