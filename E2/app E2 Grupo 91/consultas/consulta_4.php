<?php include('../templates/header.html');
#-- Ayudantía de PHP usada como plantilla -- #   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

    $tour = $_POST["nombre_tour"];

 	$query = "SELECT eventos.pais FROM eventos, pertenece_tour, tours WHERE eventos.id_evento = pertenece_tour.id_evento AND pertenece_tour.id_tour = tours.id_tour AND tours.nombre_tour = '$tour';";
	$result = $db -> prepare($query);
	$result -> execute();
	$pais = $result -> fetchAll();
  ?>

	<table class="center">
    <tr>
      <th>Países</th>
    </tr>
    <?php
    
        foreach ($pais as $ps) {
          echo "</td><td>$ps[0]</td></tr>";
      }
      ?>
	</table>

<?php include('../templates/footer.html'); ?>
