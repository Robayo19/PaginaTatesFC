<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/formCrud.css">
    <title>Document</title>
</head>
<body>
        <p id="titulo">CREAR USUARIO</p>
        <img src="../../Imagenes/emblema.png" id="imagen">
        <form action = "saveUsuario.php" method="POST">
            <input type="text" name="nombre" placeholder = "Inserta un nombre">
            <input type="text" name="apellido" placeholder = "Inserta un apellido">
            <input type="text" name="numero" placeholder = "Inserta un numero">
            <input type="text" name="direccion" placeholder = "Inserta un direccion">
            <input type="text" name="edad" placeholder = "Inserta un edad">
            <input type="text" name="correo_electronico" placeholder = "Inserta un correo electronico">
            <input type="text" name="contraseña" placeholder = "Inserta una contraseña">
            <input type="text" name="id_rol" placeholder = "Inserta un rol">
            <button type=submit>ENVIAR</button>
        </form>
</body>
</html>