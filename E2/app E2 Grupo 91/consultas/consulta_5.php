<?php include('../templates/header.html');
#-- Ayudantía de PHP usada como plantilla -- #   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  $artista_productora = $_POST["artista_productora"];

 	$query = "SELECT productoras.id_productora, nombre_productora, productoras.pais, telefono_productora FROM artistas, participa_en, eventos, patrocina_a, productoras WHERE artistas.id_artista = participa_en.id_artista AND participa_en.id_evento = eventos.id_evento AND eventos.id_evento = patrocina_a.id_evento AND patrocina_a.id_productora = productoras.id_productora AND artistas.nombre_artistico = '$artista_productora';";
	$result = $db -> prepare($query);
	$result -> execute();
	$productoras = $result -> fetchAll();
  ?>

	<table class="center">
    <tr>
      <th>ID</th>
      <th>Nombre de Productora</th>
      <th>País</th>
      <th>Teléfono</th>
    </tr>
    <?php
    
        foreach ($productoras as $prd) {
          echo "</td><td>$prd[0]</td><td>$prd[1]</td><td>$prd[2]</td><td>$prd[3]</td></tr>";
      }
      ?>
	</table>

<?php include('../templates/footer.html'); ?>
