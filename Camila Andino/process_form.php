<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  // Procesar los datos enviados
  $response = "Hola, $name! Tu correo electrónico es $email.";
  echo $response;
?>