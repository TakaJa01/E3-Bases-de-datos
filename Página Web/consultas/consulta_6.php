<?php include('../templates/header.html');
#-- Ayudantía de PHP usada como plantilla -- #   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  $artista_hotel = $_POST["artista_hotel"];

 	$query = "SELECT nombre_hotel, COUNT(nombre_hotel) FROM hospedajes WHERE nombre_artista='$artista_hotel' GROUP BY nombre_hotel;";
	$result = $db -> prepare($query);
	$result -> execute();
	$hotel = $result -> fetchAll();
  ?>

	<table class="center">
    <tr>
      <th>Nombre de Hotel</th>
    </tr>
    <?php
    
        foreach ($hotel as $htl) {
          echo "</td><td>$htl[0]</td></tr>";
      }
      ?>
	</table>

<?php include('../templates/footer.html'); ?>
