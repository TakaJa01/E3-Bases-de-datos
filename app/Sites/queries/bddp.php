<?php

    require("../config/conexion.php");
    include('../templates/header.html');

    $query = "SELECT * FROM productora ORDER BY id;";
    $result = $dbp -> prepare($query);
    $result -> execute();
    $productoras = $result -> fetchAll();

?>

    <body>  
        <table class='table'>
            <thead>
                <tr>
                    <th>Contacto</th>
                    <th>Nombre</th>
                    <th>Inicio</th>
                    <th>Pais</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($productoras as $p) {
                    echo "<tr> <td>$p[0]</td> <td>$p[1]</td> <td>$p[2]</td> <td>$p[3] </tr>";
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