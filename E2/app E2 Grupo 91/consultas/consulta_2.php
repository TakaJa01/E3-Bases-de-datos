<?php include('../templates/header.html');
#-- Ayudantía de PHP usada como plantilla -- #   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  $artista_elegido = $_POST["nombre_artista"];

 	$query = "SELECT artistas.nombre_artistico, count(entrada_cortesia.id_entrada)
    FROM artistas, regala_entrada, entrada_cortesia
    WHERE artistas.id_artista = regala_entrada.id_artista 
    AND regala_entrada.id_entrada = entrada_cortesia.id_entrada 
    AND artistas.nombre_artistico = '$artista_elegido'
    GROUP BY nombre_artistico;";
	$result = $db -> prepare($query);
	$result -> execute();
	$entradas = $result -> fetchAll();
  ?>

	<table class="center">
    <tr>
      <th>Artista Seleccionado</th>
      <th>N° de Entradas de Cortesía</th>
    </tr>
    <?php
    
        foreach ($entradas as $ent) {
          echo "</td><td>$ent[0]</td><td>$ent[1]</td></tr>";
      }
      ?>
	</table>

<?php include('../templates/footer.html'); ?>
