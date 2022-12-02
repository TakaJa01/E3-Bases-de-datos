<?php include('../templates/header.html');
#-- Ayudantía de PHP usada como plantilla -- #   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");


  #Se construye la consulta como un string
 	$query = "SELECT nombre_artistico, telefono_artista
    FROM artistas 
    ORDER BY nombre_artistico ASC;";

  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
	$result = $db -> prepare($query);
	$result -> execute();
	$artistas = $result -> fetchAll();
  ?>

  <table class="center">
    <tr>
      <!--<th>ID</th>-->
      <th>Nombre</th>
      <th>Teléfono de Contacto</th>
    </tr>
  
      <?php
        // echo $pokemones;
        foreach ($artistas as $arts) {
          echo "</td><td>$arts[0]</td><td>$arts[1]</td></tr>";
      }
      ?>
      
  </table>

<?php include('../templates/footer.html'); ?>
