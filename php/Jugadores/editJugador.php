<?php

$id = $_GET['id'];

require_once('../Database/Database.php');

$jugador= Database::getJugadorId($id);
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
<p id="titulo">EDITAR JUGADOR</p>
<img src="../../Imagenes/emblema.png" id="imagen">
<form action="updatejugador.php" method="POST">
<input type="hidden" name="id" value="<?php echo $jugador['id'] ?>">
<input type="text" name="nombre" value="<?php echo $jugador['nombre'] ?>" placeholder="Actualiza un nombre">
<input type="text" name="apellido" value="<?php echo $jugador['apellido'] ?>" placeholder="Actualiza un apellido">
<input type="text" name="dorsal" value="<?php echo $jugador['dorsal'] ?>" placeholder="Actualiza un dorsal">
<input type="text" name="posicion" value="<?php echo $jugador['posicion'] ?>" placeholder="Actualiza una posicion">
 <button type = "submit">Enviar</button>
</form>

</body>

</html>