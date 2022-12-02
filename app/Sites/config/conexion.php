<?php
  try {
    require('data.php');
    $dbp = new PDO("pgsql:dbname=$databaseNamep;host=localhost;port=5432;user=$userp;password=$passwordp");
  } catch (Exception $e) {
    echo "No se pudo conectar a la base de datos: $e";
  }
  try {
    require('data.php');
    $dbimp = new PDO("pgsql:dbname=$databaseNameimp;host=localhost;port=5432;user=$userimp;password=$passwordimp");
  } catch (Exception $e) {
    echo "No se pudo conectar a la base de datos: $e";
  }
?>