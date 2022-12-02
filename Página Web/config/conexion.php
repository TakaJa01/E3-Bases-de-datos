<?php
  try {
    #-- Ayudantía de PHP usada como plantilla -- #
    #Pide las variables para conectarse a la base de datos.
    require('data.php'); 
    # Se crea la instancia de PDO
    $db = new PDO("pgsql:dbname=$databaseName;host=localhost;port=5432;user=$user;password=$password");
  } catch (Exception $e) {
    echo "Error al conectar a la base de datos: $e";
  }
?>
