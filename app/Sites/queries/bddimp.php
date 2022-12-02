<?php

    require("../config/conexion.php");
    include('../templates/header.html');

    $query = "SELECT * FROM artista ORDER BY id;";
    $result = $dbimp -> prepare($query);
    $result -> execute();
    $artistas = $result -> fetchAll();

?>

    <body>  
        <table class='table'>
            <thead>
                <tr>
                <th>ID</th>
                <th>Nombre del evento</th>
                <th>Inicio del evento</th>
                <th>Nombre del recinto</th>
                <th>Ciudad del recinto</th>
                <th>Pais del recinto</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($artistas as $a) {
                    echo "<tr> <td>$a[0]</td> <td>$a[1]</td> <td>$a[2]</td> <td>$a[3]</td> <td>$a[4]</td> <td>$a[5]</td> </tr>";
                }
                ?>
            </tbody>
        </table>
        <footer>
            <p>
                Entrega 3 Grupo 84 & Grupo 91
            </p>
        </footer>

    </body>
</html>