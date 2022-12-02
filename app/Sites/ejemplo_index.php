<?php include('./templates/header.html');   ?>
    <body>
        <div class='main'>
            <h1 class='title'>Grupo 84 y Grupo 91 </h1>
            
            <div class='container'>
                <h3>Inicia Sesión</h3>
                <form  action='./queries/inicio_sesion.php' method='POST'>
                    <div class='form-element'>
                        <label for='name'>Nombre de usuario</label>
                        <input type='text' name='name' />
                    </div>

                    <div class='form-element'>
                        <label for='password'>Contraseña</label>
                        <input type='text' name='password' />
                    </div>

                    <input class='btn' type='submit' value='Iniciar Sesión'>
                </form>
            </div>

            <div class='container'>
                <h3>Importar Usuarios</h3>
                <form  action='./queries/importar.php' method='GET'>
                    <input class='btn' type='submit' value='Importar'>
                </form>
            </div>
        </div>
        <footer>
            <p>
                Entrega 3 Bases de datos
            </p>
        </footer>

    </body>
</html>