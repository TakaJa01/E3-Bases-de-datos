<?php include('templates/header.html');   ?>
<?php #Ayudantía de PHP usada como plantilla ?>

<body>
  <h1 align="center">Javier Takahashi P. & Diego Valenzuela A.</h1>
  <h1 align="center">Entrega 2: Desarrollo de una Aplicación</h1>
  <h1 align="center">Consultas Impares - Grupo 91</h1>
  <p style="text-align:center;">Toda la información sobre Artistas y Conciertos, a sólo un click!.</p>

  <br>

  <h3 align="center"> Consulta 1: Nombre y Teléfono de todos los Artistas</h3>

  <form align="center" action="consultas/consulta_1.php" method="post">
    <input type="submit" value="Mostrar Listado">
  </form>

  <br>
  <br>
  <br>

  <h3 align="center"> Consulta 2: Entradas de Cortesía de un Artista</h3>

  <?php

  require("config/conexion.php");
  $result = $db -> prepare("SELECT DISTINCT nombre_artistico FROM artistas ORDER BY nombre_artistico ASC;");
  $result -> execute();
  $artistas_dropdown = $result -> fetchAll();
  ?>

  <form align="center" action="consultas/consulta_2.php" method="post">
    Selecciona un Artista:
    <select name="nombre_artista">
      <?php
      #Para cada tipo agregamos el tag <option value=value_of_param> visible_value </option>
      foreach ($artistas_dropdown as $ad) {
        echo "<option value='$ad[0]'>$ad[0]</option>";
      }
      ?>
    </select>
    <br><br>
    <input type="submit" value="Buscar artista">
  </form>
  
  <br>
  <br>
  <br>

  <h3 align="center"> Consulta 3: Tour más reciente de Artista</h3>

  <?php

  require("config/conexion.php");
  $result = $db -> prepare("SELECT DISTINCT nombre_artistico FROM artistas ORDER BY nombre_artistico ASC;");
  $result -> execute();
  $artistas_dropdown = $result -> fetchAll();
  ?>

  <form align="center" action="consultas/consulta_3.php" method="post">
    Selecciona un Artista:
    <select name="artista_tour">
      <?php
      #Para cada tipo agregamos el tag <option value=value_of_param> visible_value </option>
      foreach ($artistas_dropdown as $ad) {
        echo "<option value='$ad[0]'>$ad[0]</option>";
      }
      ?>
    </select>
    <br><br>
    <input type="submit" value="Buscar Tour">
  </form>

  <br>
  <br>
  <br>

  <h3 align="center"> Consulta 4: Países visitados por Tour</h3>

  <?php

  require("config/conexion.php");
  $result = $db -> prepare("SELECT DISTINCT nombre_tour FROM tours ORDER BY nombre_tour ASC;");
  $result -> execute();
  $artistas_dropdown = $result -> fetchAll();
  ?>

  <form align="center" action="consultas/consulta_4.php" method="post">
    Selecciona un Tour:
    <select name="nombre_tour">
      <?php
      #Para cada tipo agregamos el tag <option value=value_of_param> visible_value </option>
      foreach ($artistas_dropdown as $ad) {
        echo "<option value='$ad[0]'>$ad[0]</option>";
      }
      ?>
    </select>
    <br><br>
    <input type="submit" value="Buscar Tour">
  </form>

  <br>
  <br>
  <br>

  <h3 align="center"> Consulta 5: Productoras que han trabajado con Artista</h3>

  <?php

  require("config/conexion.php");
  $result = $db -> prepare("SELECT DISTINCT nombre_artistico FROM artistas ORDER BY nombre_artistico ASC;");
  $result -> execute();
  $artistas_dropdown = $result -> fetchAll();
  ?>

  <form align="center" action="consultas/consulta_5.php" method="post">
    Selecciona una Artista:
    <select name="artista_productora">
      <?php
      #Para cada tipo agregamos el tag <option value=value_of_param> visible_value </option>
      foreach ($artistas_dropdown as $ad) {
        echo "<option value='$ad[0]'>$ad[0]</option>";
      }
      ?>
    </select>
    <br><br>
    <input type="submit" value="Buscar Productoras">
  </form>

  <br>
  <br>
  <br>

  <h3 align="center"> Consulta 6: Reservas de Hotel según Artista</h3>

  <?php

  require("config/conexion.php");
  $result = $db -> prepare("SELECT DISTINCT nombre_artistico FROM artistas ORDER BY nombre_artistico ASC;");
  $result -> execute();
  $artistas_dropdown = $result -> fetchAll();
  ?>

  <form align="center" action="consultas/consulta_6.php" method="post">
    Selecciona una Artista:
    <select name="artista_hotel">
      <?php
      #Para cada tipo agregamos el tag <option value=value_of_param> visible_value </option>
      foreach ($artistas_dropdown as $ad) {
        echo "<option value='$ad[0]'>$ad[0]</option>";
      }
      ?>
    </select>
    <br><br>
    <input type="submit" value="Buscar Hoteles">
  </form>

  <br>
  <br>
  <br>

  <h3 align="center"> Consulta 7: Artista con más Entradas de Cortesía</h3>

  <form align="center" action="consultas/consulta_7.php" method="post">
    <input type="submit" value="Mostrar Artista">
  </form>

  <br>
  <br>
  <br>

</body>
</html>
