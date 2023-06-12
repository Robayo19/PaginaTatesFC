<?php

$datos = [$_POST['nombre']];

require_once ('../Database/Database.php');

Database::saveRol($datos);

header('Location: ../Pagina/admin.php');

?>