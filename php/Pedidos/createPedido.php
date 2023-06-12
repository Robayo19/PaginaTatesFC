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
        <p id="titulo">CREAR PEDIDO</p>
        <form action = "savePedido.php" method="POST">
            <input type="text" name="id_producto" placeholder = "Inserta un producto id">
            <input type="text" name="id_usuario" placeholder = "Inserta un usuario id">
            <input type="text" name="cantidad" placeholder = "Inserta una cantidad">
            <input type="text" name="fecha_envio" placeholder = "Inserta una fecha de envio">
            <input type="text" name="fecha_entrega" placeholder = "Inserta una fecha de entrega">
            <button type=submit>ENVIAR</button>
        </form>
</body>
</html>