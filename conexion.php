<?php
$host = "mysql-carlos1010.alwaysdata.net"; 
$database = "carlos1010_escuela"; 
$username = "435496"; 
$password = "Tivu21032008"; 

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa";
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>