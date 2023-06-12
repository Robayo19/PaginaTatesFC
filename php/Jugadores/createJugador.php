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
        <p id="titulo">CREAR JUGADOR</p>
        <img src="../../Imagenes/emblema.png" id="imagen">
        <form action = "saveJugador.php" method="POST">
            <input type="text" name="nombre" placeholder = "Inserta un nombre">
            <input type="text" name="apellido" placeholder = "Inserta un apellido">
            <input type="text" name="dorsal" placeholder = "Inserta un dorsal">
            <input type="text" name="posicion" placeholder = "Inserta un posicion">
            <button type=submit>ENVIAR</button>
        </form>
</body>
</html>