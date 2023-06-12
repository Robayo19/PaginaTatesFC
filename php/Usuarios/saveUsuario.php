<?php

$datos = [$_POST['nombre'],$_POST['apellido'], $_POST['numero'], $_POST['direccion'], $_POST['edad'], $_POST['correo_electronico'], $_POST['contraseña'],$_POST['id_rol']];

require_once ('../Database/Database.php');

Database::saveUsuario($datos);

header('Location: ../Pagina/admin.php');

?>