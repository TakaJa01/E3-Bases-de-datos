<?php include('../templates/header.html');
#-- Ayudantía de PHP usada como plantilla -- #   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");


  #Se construye la consulta como un string
 	$query = "SELECT *
    FROM artistas
    WHERE id_artista = (SELECT id_artista FROM regala_entrada GROUP BY id_artista ORDER BY COUNT(id_artista) DESC limit 1);";

  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
	$result = $db -> prepare($query);
	$result -> execute();
	$artistas = $result -> fetchAll();
  ?>

  <table class="center">
    <tr>
      <!--<th>ID</th>-->
      <th>Nombre</th>
      <th>Inicio de su Carrera</th>
      <th>Número de Teléfono</th>
    </tr>
  
      <?php
        // echo $pokemones;
        foreach ($artistas as $arts) {
          echo "</td><td>$arts[1]</td><td>$arts[2]</td><td>$arts[3]</td></tr>";
      }
      ?>
      
  </table>

<?php include('../templates/footer.html'); ?>
