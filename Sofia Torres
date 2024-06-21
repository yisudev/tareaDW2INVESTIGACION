<?php
// Conectar a la base de datos
$mysqli = new mysqli("localhost", "usuario", "contraseña", "basedatos");

// Verificar conexiÃ³n
if ($mysqli->connect_error) {
    die("Error de conexion: " . $mysqli->connect_error);
}

// Realizar consulta SQL
$resultado = $mysqli->query("SELECT * FROM tabla");

// Recopilar resultados en un array
$data = array();
while ($fila = $resultado->fetch_assoc()) {
    $data[] = $fila;
}

// Convertir array a JSON
$json = json_encode($data);

// Mostrar JSON
echo $json;

$mysqli->close(); // Cerrar la conexiÃ³n
?>
