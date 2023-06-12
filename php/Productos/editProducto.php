<?php

$id = $_GET['id'];

require_once('../Database/Database.php');

$producto= Database::getProductoId($id);
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
<p id="titulo">EDITAR PRODUCTO</p>
<img src="../../Imagenes/emblema.png" id="imagen">
<form action="updateProducto.php" method="POST">
<input type="hidden" name="id" value="<?php echo $producto['id'] ?>">
<input type="text" name="nombre" value="<?php echo $producto['nombre'] ?>" placeholder="Actualiza un nombre">
<input type="text" name="precio" value="<?php echo $producto['precio'] ?>" placeholder="Actualiza un precio">
<input type="text" name="stock" value="<?php echo $producto['stock'] ?>" placeholder="Actualiza un stock">
 <button type = "submit">Enviar</button>
</form>

</body>

</html>