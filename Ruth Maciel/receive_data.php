<?php
$q = $_REQUEST["q"];
// Procesar los datos enviados
$response = "La respuesta del servidor es: ". $q;
// Devolver la respuesta en formato JSON
echo json_encode($response);
?>
