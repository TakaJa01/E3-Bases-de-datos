CREATE OR REPLACE FUNCTION

-- declaraos la función y sus argumentos
importar_usuarios()

-- declaramos lo que retorna
RETURNS BOOLEAN AS $$
-- definimos la función
BEGIN
    
    FOR artista IN artistas
    LOOP
    id_ usuario = artista.id_artista
    nombre_usuario = ""
    for letra in range(len(nombre_artista))
    if letra != " "
        nombre_usuario = nombre_usuario + letra
    else
        nombre_usuario = nombre_usuario + "_"
        nombre_usuario = nombre_usuario
        contraseña = random.randint(1000, 9999)

    INSERT INTO usuarios VALUES (id_usuario, nombre_usuario, contraseña)
    END LOOP;

    FOR productora IN productoras
    LOOP
    id_usuario = productoras.contacto_productora
    nombre_usuario = ""
    for letra in range(len(nombre_productora))
    if letra != " "
        nombre_usuario = nombre_usuario + letra
    else
    nombre_usuario = nombre_usuario + "_"
    nombre_usuario = nombre_usuario
    contraseña = random.randint(1000, 9999)

    INSERT INTO usuarios VALUES (id_usuario, nombre_usuario, contraseña)
    END LOOP;

END

$$ language plpgsql



