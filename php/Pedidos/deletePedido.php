<?php

        $id = $_GET['id'];

        require_once('../Database/Database.php');
        Database::deletePedido($id);

        header('Location: ../Pagina/admin.php');
?>