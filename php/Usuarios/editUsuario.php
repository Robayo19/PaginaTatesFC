<?php

$id = $_GET['id'];

require_once('../Database/Database.php');

$usuario= Database::getusuarioId($id);
?>

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
<p id="titulo">EDITAR USUARIO</p>
<img src="../../Imagenes/emblema.png" id="imagen">
<form action="updateUsuario.php" method="POST">
<input type="hidden" name="id" value="<?php echo $usuario['id'] ?>">
<input type="text" name="nombre" value="<?php echo $usuario['nombre'] ?>" placeholder="Actualiza un nombre">
<input type="text" name="apellido" value="<?php echo $usuario['apellido'] ?>" placeholder="Actualiza un apellido">
<input type="text" name="numero" value="<?php echo $usuario['numero'] ?>" placeholder="Actualiza un numero">
<input type="text" name="direccion" value="<?php echo $usuario['direccion'] ?>" placeholder="Actualiza una direccion">
<input type="text" name="edad" value="<?php echo $usuario['edad'] ?>" placeholder="Actualiza una edad">
<input type="text" name="correo_electronico" value="<?php echo $usuario['correo_electronico'] ?>" placeholder="Actualiza un correo electronico">
<input type="text" name="contraseña" value="<?php echo $usuario['contraseña'] ?>" placeholder="Actualiza una contraseña">
<input type="text" name="id_rol" value="<?php echo $usuario['id_rol'] ?>" placeholder="Actualiza un rol para el usuario">
 <button type = "submit">Enviar</button>
</form>

</body>

</html>