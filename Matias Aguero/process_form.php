<?php
  if (isset($_POST['movieName'])) {
    $movieName = $_POST['movieName'];
    if ($movieName) {
      file_put_contents('movies.txt', htmlspecialchars($movieName) . "\r\n", FILE_APPEND);
    }
    exit();
  }
?>