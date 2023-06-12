<?php

$datos = [$_POST['id'],$_POST['nombre'],$_POST['precio'], $_POST['stock']];

require_once ('../Database/Database.php');

Database::updateProductos($datos);

header('Location: ../Pagina/admin.php');

?>