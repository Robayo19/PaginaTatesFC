<?php

        $id = $_GET['id'];

        require_once('../Database/Database.php');
        Database::deleteProducto($id);

        header('Location: ../Pagina/admin.php');
?>