<?php
$servername = "sql312.infinityfree.com";
$username = "if0_37321698";
$password = "1Dq0m98evc";
$dbname = "if0_37321698_prueba";

// Crear conexión

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa";
//escribe un hola mundo
