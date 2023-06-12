<?php

$datos = [$_POST['nombre'],$_POST['precio'], $_POST['stock']];

require_once ('../Database/Database.php');

Database::saveProductos($datos);

header('Location: ../Pagina/admin.php');

?>