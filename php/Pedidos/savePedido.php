<?php

$datos = [$_POST['id_producto'],$_POST['id_usuario'], $_POST['cantidad'], $_POST['fecha_envio'], $_POST['fecha_entrega']];

require_once ('../Database/Database.php');

Database::savePedido($datos);

header('Location: ../Pagina/admin.php');

?>