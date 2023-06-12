<?php

$datos = [$_POST['id'], $_POST['cantidad']];

require_once ('../Database/Database.php');

Database::updatePedido($datos);

header('Location: ../Pagina/admin.php');

?>