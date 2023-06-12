<?php

$datos1 = [$_POST['nombre'],$_POST['apellido'], $_POST['numero'], $_POST['direccion'], $_POST['edad'], $_POST['correo_electronico'], $_POST['contraseña']];

require_once ('../Database/Database.php');

Database::saveUsuario2($datos1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../Imagenes/emblema.png">
    <title>TATES FC</title>
    <style>
        body {
    background: linear-gradient(#1c487af4, white);
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100vw;
    height: 100vh;

}
.new {
    transition: 1s;
    border: 2px solid grey;
    border-top: 7px solid rgb(4, 35, 61);
    padding: 15px;
    width: 500px;
    height: 330px;
    background-color: #fff;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.titulo {
    letter-spacing: 4px;
    font-size: 30px;
    text-align: center;
    color: rgb(4, 35, 61);
}
    </style>
</head>
<body>
    <main>
        <div class="new">
            <p class="titulo">"¡Ya eres socio de TATES FC!"</p>
            <p>Ahora inicia sesion</p>
            <a href="../Pagina/login.php">aquí</a>
        </div>
    </main>
</body>
</html>