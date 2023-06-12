<?php

$datos = [$_POST['nombre'],$_POST['apellido'], $_POST['dorsal'], $_POST['posicion']];

require_once ('../Database/Database.php');

Database::saveJugador($datos);

header('Location: ../Pagina/admin.php');

?>