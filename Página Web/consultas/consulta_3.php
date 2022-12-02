<?php include('../templates/header.html');
#-- Ayudantía de PHP usada como plantilla -- #   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  $artista_tour = $_POST["artista_tour"];

 	$query = "SELECT DISTINCT tours.id_tour, tours.nombre_tour, tours.fecha_inicio, tours.fecha_termino FROM artistas, participa_en, eventos, pertenece_tour, tours WHERE artistas.id_artista = participa_en.id_artista AND participa_en.id_evento = eventos.id_evento AND eventos.id_evento = pertenece_tour.id_evento AND pertenece_tour.id_tour = tours.id_tour AND artistas.nombre_artistico = '$artista_tour' ORDER BY tours.fecha_inicio DESC limit 1;";
	$result = $db -> prepare($query);
	$result -> execute();
	$tours = $result -> fetchAll();
  ?>

	<table class="">
    <tr>
      <th>ID</th>
      <th>Nombre de Tour</th>
      <th>Fecha de Inicio</th>
      <th>Fecha de Término</th>
    </tr>
    <?php
    
        foreach ($tours as $trs) {
          echo "</td><td>$trs[0]</td><td>$trs[1]</td><td>$trs[2]</td><td>$trs[3]</td></tr>";
      }
      ?>
	</table>

<?php include('../templates/footer.html'); ?>
