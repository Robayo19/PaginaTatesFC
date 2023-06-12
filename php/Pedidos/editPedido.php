<?php

$id = $_GET['id'];

require_once('../Database/Database.php');

$pedido = Database::getPedidoid($id);

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
<p id="titulo">EDITAR PEDIDO</p>
<p>Solo se puede editar la cantidad de un pedido*</p>
<form action="updatePedido.php" method="POST">
<input type="hidden" name="id" value="<?php echo $pedido['id'] ?>">
<input type="text" name="cantidad" value="<?php echo $pedido['cantidad'] ?>" placeholder="Actualiza la cantidad">
 <button type = "submit">Enviar</button>
</form>

</body>

</html>