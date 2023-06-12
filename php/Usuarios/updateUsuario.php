<?php

$datos = [$_POST['id'],$_POST['nombre'],$_POST['apellido'],$_POST['numero'], $_POST['direccion'], $_POST['edad'], $_POST['correo_electronico'],$_POST['contraseña'], $_POST['id_rol']];

require_once ('../Database/Database.php');

Database::updateUsuario($datos);

header('Location: ../Pagina/admin.php');

?>