<?php

$datos = [$_POST['id'],$_POST['nombre'],$_POST['apellido'], $_POST['dorsal'], $_POST['posicion']];

require_once ('../Database/Database.php');

Database::updateJugador($datos);

header('Location: ../Pagina/admin.php');

?>